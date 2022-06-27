<template>
    <span @click="!answered && setAnswer(answerBoxId)"
      :class="{
               'w-40 text-green-700 text-4xl border-2 border-gray-200 rounded-md inline-block text-center h-12 mx-2 cursor-pointer leading-7': !answered,
               'w-40 bg-green-700 text-white rounded-md inline-block font-bold text-center h-12 mx-2 leading-10 relative': answered,
               'bg-gray-200 border-2 border-gray-400': active
               }">
      <span v-if="answered">{{ selectedAnswerTitle }}</span>
      <span v-else>....</span>
      <span @click="removeAnswer(answerBoxId)"
            class="bg-red-700 text-white absolute w-6 h-6 flex justify-center items-center rounded-full rotate-45 bottom-9 left-36 cursor-pointer"
            :class="{'hidden': !answered}"
      >+</span>
    </span>
</template>

<script>
export default {
  name: "AnswerBox.vue",
  props: {
    active: {
      default: false,
      type: Boolean
    },
    selectedAnswerTitle: {
      default: null,
      type: String
    },
    answered: {
      default: false,
      type: Boolean
    },
    answerBoxId: {
      default: null,
      type: Number
    }
  },
  methods: {
    setAnswer(answerBoxId) {
      this.$emit('setAnswer', answerBoxId)

    },
    removeAnswer(answerBoxId) {
      this.$emit('removeAnswer', answerBoxId)
    }
  }
}
</script>