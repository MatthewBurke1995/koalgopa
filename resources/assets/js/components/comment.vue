<template>


<div class="card bottom-buffer" :style="'margin-left: ' + level*40 + 'px'">
  <h6 class="card-header">iteration: {{ iteration }}. commentid: {{ commentid }}. {{ name }}</h6>
  <div class="card-body">
    <p class="m-0 card-text white-space">{{ parentid }}/: {{ commenttext }} </p>
    <p class=" m-0 text-right text-muted">{{ commentcreatedtime }}</p>

  </div>
</div>




</template>


<script>
export default {
  props: ['iteration','commentid', 'name', 'commenttext', 'postcreatedtime', 'commentcreatedtime', 'level']
}
</script>
