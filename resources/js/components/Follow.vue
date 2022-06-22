<template>
  <div>
    <button class="btn btn-primary ms-4" @click="followUser">Follow</button>
  </div>
</template>

<script>
export default {
  props: ["userId"],
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    followUser() {
      axios
        .post("http://127.0.0.1:8000/follow/" + this.userId)
        .then((res) => {
          alert(res.data);
        })
        .catch((res) => {});
    },
  },
};
</script>
