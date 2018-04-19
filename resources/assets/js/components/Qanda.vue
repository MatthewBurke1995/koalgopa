<template>
  <div class="mb-2">
    <h5>Q. {{ question }} </h5>
    <p class="ml-4"><i><span v-html="answer"></span></i></p>
  </div>
</template>


<script>
export default {
  props: ['question', 'answer']
}
</script>
