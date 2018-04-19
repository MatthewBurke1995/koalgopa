<template>
<tr>
  <td><a :href="'forum/' + postid"> {{ posttitle }} ({{ commentscount }})</a> <br>
  {{ postcreatedtime }} | <a :href="'user/' + name"> {{name}} </a>
  </td>
</tr>
</template>


<script>
export default {
  props: ['postid', 'posttitle', 'commentscount', 'postcreatedtime', 'name']
}
</script>
