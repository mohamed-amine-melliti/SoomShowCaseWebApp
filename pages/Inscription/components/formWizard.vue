<template>
  <div>
    <ouverture-dossier1 v-if="currentStepNumber === 1"  />
    <ouverture-dossier2 v-if="currentStepNumber === 2"  />
    <ouverture-dossier3 v-if="currentStepNumber === 3"/>

    <div class="progress-bar">
      <div :style="`width: ${progress}%;`"></div>
    </div>

    <!-- Actions -->

  </div>
</template>

<script>

import OuvertureDossier1 from "./ouvertureDossier1";
import OuvertureDossier2 from "./ouvertureDossier2";
import OuvertureDossier3 from "./ouvertureDossier3";

export default {
  name: 'FormWizard',
  components: {
    OuvertureDossier3,
    OuvertureDossier2,
    OuvertureDossier1,

  },
  data() {
    return {
      currentStepNumber: 1,
      length: 4

    }
  },
  computed: {
    progress() {
      return this.currentStepNumber / this.length * 100
    }
  },
  methods: {

    processStep(stepData)
    {
      Object.assign(this.form,stepData)
    },

    goBack() {
      this.currentStepNumber--
    },
    goNext() {
      this.currentStepNumber++
    }
  }
}
</script>
