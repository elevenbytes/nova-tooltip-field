Nova.booting((Vue, router, store) => {
    Vue.component('icon-info', require('./components/Icons/Info'))

    Vue.component('index-nova-tooltip-field', require('./components/IndexField'))
    Vue.component('detail-nova-tooltip-field', require('./components/DetailField'))
    Vue.component('form-nova-tooltip-field', require('./components/FormField'))
})
