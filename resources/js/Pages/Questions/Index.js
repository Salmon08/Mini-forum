import { defineComponent } from 'vue'
import { Link } from '@inertiajs/inertia-vue3'

export default defineComponent({
  props: {
    questions: Array
  },
  components: {
    Link
  }
})
