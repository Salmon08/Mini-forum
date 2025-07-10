import axios from 'axios'
import { defineComponent } from 'vue'
import { toast } from 'vue3-toastify'

export default defineComponent({
  props: {
    question: Object
  },
  data() {
    return {
      form: {
        answer_text: ''
      },
      errors: {}
    }
  },
  methods: {
    async submit() {
      this.errors = {}

      try {
        await axios.post(`/questions/${this.question.id}/answers`, this.form)

        toast.success('Answer submitted!')
        this.form.answer_text = ''

        // Reload page to reflect the new answer
        window.location.reload()

      } catch (error) {
        if (error.response && error.response.status === 422) {
          this.errors = error.response.data.errors
          toast.error('Answer cannot be empty')
        } else {
          toast.error('Something went wrong.')
        }
      }
    }
  }
})
