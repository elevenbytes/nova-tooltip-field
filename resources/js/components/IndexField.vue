<template>
    <span class="text-70 hover:text-primary">
        <icon
            type="info"
            width="18"
            height="18"
            view-box="0 0 20 20"
            v-tooltip="field.value ? field.value : '—'"
        />
    </span>
</template>

<script>
export default {
    props: ['resourceName', 'field'],
}
</script>
