<template>
  <div class="px-12 py-6 text-xl border-b-2 border-gray-300 border-dashed leading-16">
    Liebe Claudia,<br>
    entschuldige, dass ich mich so lange nicht bei dir gemeldetbr <br>
    Wie du weißt, bin ich vor zwei Wochen
    <!-- 1 is the answer box number -->
    <AnswerBox
        :active="selectedAnswer && ! selectedAnswers[1] || droppedAnswer && !selectedAnswers[1]"
        :selected-answer-title="selectedAnswers[1]?.title"
        :answered="!!selectedAnswers[1]"
        :answer-box-id="1"
        @setAnswer="onSetAnswer"
        @removeAnswer="onRemoveAnswer"
        @drop="!selectedAnswers[1] && onDrop($event, 1)"
        @dragover.prevent
        @dragenter.prevent
    />
    Deswegen hatte ich leider keine Zeit
    <!-- 2 is the answer box number -->
    <AnswerBox
        :active="selectedAnswer && ! selectedAnswers[2] || droppedAnswer && !selectedAnswers[2]"
        :selected-answer-title="selectedAnswers[2]?.title"
        :answered="!!selectedAnswers[2]"
        :answer-box-id="2"
        @setAnswer="onSetAnswer"
        @removeAnswer="onRemoveAnswer"
        @drop="!selectedAnswers[2] && onDrop($event, 2)"
        @dragover.prevent
        @dragenter.prevent
    />
    meine Freunde.
    Aber deinen Vorschlag, mal wieder gemeinsam
    <!-- 3 is the answer box number -->
    <AnswerBox
        :active="selectedAnswer && ! selectedAnswers[3] || droppedAnswer && !selectedAnswers[3]"
        :selected-answer-title="selectedAnswers[3]?.title"
        :answered="!!selectedAnswers[3]"
        :answer-box-id="3"
        @setAnswer="onSetAnswer"
        @removeAnswer="onRemoveAnswer"
        @drop="!selectedAnswers[3] && onDrop($event, 3)"
        @dragover.prevent
        @dragenter.prevent
    />
    Tag miteinander zu verbringen, finde ich sehr gut. Mir passt es auch am besten am Wochenende.
    Würde es bei dir schon
    <!-- 4 is the answer box number -->
    <AnswerBox
        :active="selectedAnswer && ! selectedAnswers[4] || droppedAnswer && !selectedAnswers[4]"
        :selected-answer-title="selectedAnswers[4]?.title"
        :answered="!!selectedAnswers[4]"
        :answer-box-id="4"
        @setAnswer="onSetAnswer"
        @removeAnswer="onRemoveAnswer"
        @drop="!selectedAnswers[4] && onDrop($event, 4)"
        @dragover.prevent
        @dragenter.prevent
    />
    Samstag gehen?
    Da habe ich noch nichts vor.
    Es würde
    <!-- 5 is the answer box number -->
    <AnswerBox
        :active="selectedAnswer && ! selectedAnswers[5] || droppedAnswer && !selectedAnswers[5]"
        :selected-answer-title="selectedAnswers[5]?.title"
        :answered="!!selectedAnswers[5]"
        :answer-box-id="5"
        @setAnswer="onSetAnswer"
        @removeAnswer="onRemoveAnswer"
        @drop="!selectedAnswers[5] && onDrop($event, 5)"
        @dragover.prevent
        @dragenter.prevent
    />
    natürlich freuen, wenn du dir bei dieser Gelegenheit auch meine neue Wohnung anschaust.
    Es ist wunderbar, so viel zu haben. Was meinst du, wir uns bei mir treffen und dann unsere Einkaufstour machen?
    Oder ist es dir
    <!-- 6 is the answer box number -->
    <AnswerBox
        :active="selectedAnswer && ! selectedAnswers[6] || droppedAnswer && !selectedAnswers[6]"
        :selected-answer-title="selectedAnswers[6]?.title"
        :answered="!!selectedAnswers[6]"
        :answer-box-id="6"
        @setAnswer="onSetAnswer"
        @removeAnswer="onRemoveAnswer"
        @drop="!selectedAnswers[6] && onDrop($event, 6)"
        @dragover.prevent
        @dragenter.prevent
    />
    , wenn wir zuerst einkaufen und am Abend zusammen kochen und essen?
    Übrigens, können wir dein Auto nehmen?
    <!-- 7 is the answer box number -->
    <AnswerBox
        :active="selectedAnswer && ! selectedAnswers[7] || droppedAnswer && !selectedAnswers[7]"
        :selected-answer-title="selectedAnswers[7]?.title"
        :answered="!!selectedAnswers[7]"
        :answer-box-id="7"
        @setAnswer="onSetAnswer"
        @removeAnswer="onRemoveAnswer"
        @drop="!selectedAnswers[7] && onDrop($event, 7)"
        @dragover.prevent
        @dragenter.prevent
    />
    steht schon wieder in der Werkstatt. <br>
    Schreib mir doch bald, ob du an diesem Tag Zeit hast.
    <!-- 8 is the answer box number -->
    <AnswerBox
        :active="selectedAnswer && !selectedAnswers[8] || droppedAnswer && !selectedAnswers[8]"
        :selected-answer-title="selectedAnswers[8]?.title"
        :answered="!!selectedAnswers[8]"
        :answer-box-id="8"
        @setAnswer="onSetAnswer"
        @removeAnswer="onRemoveAnswer"
        @drop="!selectedAnswers[8] && onDrop($event, 8)"
        @dragover.prevent
        @dragenter.prevent
    />
    du keine Zeit hast, finden wir sicher einen anderen Tag. <br>
    Marion
  </div>

  <div class="answers p-12">
    <div class="grid grid-rows-2 grid-flow-col gap-6 justify-between">
      <span v-for="answer in answers"
            @click="!answer.answered && selectAnswer(answer)"
            draggable="true"
            @dragstart="startDrag($event, answer)"
            @dragend="endDrag"
            :class="{
               'w-40 bg-green-700 text-white text-md rounded-md inline-block font-bold text-center h-12 cursor-pointer leading-10': !answer.answered,
               'w-40 bg-gray-200 text-cyan-300 border-2 border-cyan-200 text-md rounded-md inline-block font-bold text-center h-12 leading-10': answer.answered,
               'outline outline-4 outline-red-700 outline-offset-4': answer.id === selectedAnswer?.id
               }"
      >
        {{ answer.title }}
      </span>
    </div>
  </div>
</template>

<script>
import AnswerBox from "./AnswerBox"

export default {
  name: 'Form',
  components: {AnswerBox},
  data() {
    return {
      answers: [
        {id: 1, title: 'umgezogen', answered: false},
        {id: 2, title: 'für', answered: false},
        {id: 3, title: 'mich', answered: false},
        {id: 4, title: 'lieber', answered: false},
        {id: 5, title: 'einen', answered: false},
        {id: 6, title: 'wollen', answered: false},
        {id: 7, title: 'nächsten', answered: false},
        {id: 8, title: 'Meines', answered: false},
      ],
      selectedAnswer: null,
      droppedAnswer: null,
      selectedAnswers: {},
      remove: false
    }
  },
  methods: {
    selectAnswer(answer) {
      this.selectedAnswer = this.selectedAnswer?.id === answer.id ? null : answer
      this.droppedAnswer = null
    },
    onSetAnswer(answerBoxId) {
      if (this.selectedAnswer && !this.remove) {
        this.selectedAnswers[answerBoxId] = this.selectedAnswer
        this.selectedAnswer.answered = true
      }
      this.selectedAnswer = null
      this.remove = false
    },
    onRemoveAnswer(answerBoxId) {
      this.remove = true
      this.answers.find(a => a.id === this.selectedAnswers[answerBoxId].id).answered = false
      delete this.selectedAnswers[answerBoxId];
    },
    startDrag(event, answer) {
      this.droppedAnswer = this.droppedAnswer?.id === answer.id ? this.droppedAnswer = null : answer
      this.selectedAnswer = null
      event.dataTransfer.dropEffect = 'move'
      event.dataTransfer.effectAllowed = 'move'
      event.dataTransfer.setData('answerId', answer.id)
    },
    endDrag() {
      this.onDrop()
    },
    onDrop(event = null, answerBoxId = null) {
      if (answerBoxId) {
        const answerId = event.dataTransfer.getData('answerId')
        if (answerId && !this.remove) {
          this.selectedAnswers[answerBoxId] = this.droppedAnswer
          this.droppedAnswer.answered = true
        }
      }
      this.droppedAnswer = null
      this.remove = false
    },
  }
}
</script>