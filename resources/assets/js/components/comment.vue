<template>


<div class="card bottom-buffer" :style="'margin-left: ' + level*40 + 'px'">
  <h6 class="card-header">{{ name }}</h6>
  <div class="card-body">
    <p class="m-0 card-text white-space">{{ commenttext }} </p>
    <p class=" m-0 text-right text-muted">{{ commentcreatedtime }} |
<a data-toggle="collapse" :href="'#comment' + commentid" role="button" aria-expanded="false" aria-controls="collapseExample">
    Reply
  </a>
     </p>


  </div>

</div>
</template>


<script>
export default {
  props: ['iteration','commentid', 'name', 'commenttext', 'postcreatedtime', 'commentcreatedtime', 'level']
}
</script>
