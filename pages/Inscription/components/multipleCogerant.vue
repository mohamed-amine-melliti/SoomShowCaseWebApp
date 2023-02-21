<template>
  <div class="hello">
    <div class="row">

      <div v-for="(course, index) in courses" :key="index" class="col-sm-5">
        <div class="form-group label-floating">
          <input
              v-model="course.courseName"
              class="form-control"
              placeholder="Nom Co-gérant"/>

          <input
              v-model="course.coursePreName"
              class="form-control"
              placeholder="Prénom Co-gérant"/>

          <input
              v-model="course.courseCapital"
              class="form-control"
              placeholder="Capital%"/>
          <input
              v-model="course.courseMail"
              class="form-control"
              placeholder="Email"/>

          <button
              v-show="index != 0"
              class="btn btn-danger"
              type="button"
              @click="remove(index)"
          >
            Supprimer
          </button>
        </div>
      </div>



    </div>

    <button
        class="btn  btn-fill btn-danger btn-wd"
        type="button"
        @click="addMore()"

    >
      Ajouter Co-gérant
    </button>
  </div>
</template>

<script>
export default {
  name: "HelloWorld",
  props: {
    msg: String,
  },
  data() {
    return {
      courses: [
        {
          courseName: "",
          coursePreName: "",
          courseCapital: "",
          courseMail:"",

        },
      ],
    };
  },
  methods: {
    addMore() {
      this.courses.push({
        courseName: "",
        coursePreName: "",
        courseCapital: "",
        courseMail:"",

      });
    },
    remove(index) {
      this.courses.splice(index, 1);
    },
  },
};
</script>
