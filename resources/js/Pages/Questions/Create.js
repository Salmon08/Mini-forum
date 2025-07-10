import axios from 'axios'
import { defineComponent } from 'vue'
import { toast } from 'vue3-toastify'

export default defineComponent({
  data() {
    return {
      form: {
        title: '',
        description: ''
      },
      errors: {}
    }
  },
  methods: {
    async submit() {
      this.errors = {}

      try {
        const response = await axios.post('/questions', this.form)
        toast.success('Question posted!')
        window.location.href = '/questions' // manual redirect after success
      } catch (error) {
        if (error.response && error.response.status === 422) {
          this.errors = error.response.data.errors
          toast.error('Please correct the errors.')
        } else {
          toast.error('Something went wrong.')
        }
      }
    }
  }
})
