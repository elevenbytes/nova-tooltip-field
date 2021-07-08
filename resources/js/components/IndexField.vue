<template>
  <div class="text-70 hover:text-primary flex justify-center mb-1 cursor-pointer">
    <span
        v-if="icon"
        class="h-6"
        v-tooltip="tooltipValue"
        v-html="icon"
    />
    <icon
        v-else
        type="info"
        width="18"
        height="18"
        view-box="0 0 20 20"
        v-tooltip="tooltipValue"
    />
  </div>
</template>

<script>
export default {
  props: ['resourceName', 'field'],

  computed: {
    icon () {
      if (typeof this.field.dependIcons === 'object' && this.field.dependIcons) {
        if (this.field.dependIcons.hasOwnProperty(this.field.value)) {
          return this.field.dependIcons[this.field.value]
        }
      }

      if (this.field.icon) {
        return this.field.icon
      }

      return null
    },
    tooltipValue () {
      return this.field.value ? this.field.value : '—'
    }
  }
}
</script>
