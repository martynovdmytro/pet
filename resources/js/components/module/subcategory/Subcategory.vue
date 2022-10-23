<template>
  <div>
    {{ $route.params.id }}
  </div>
</template>

<script>
export default {
  props: [

  ],
  data () {
    return {
      id: this.$route.params.id
    }
  },
  methods: {

  }
}
</script>