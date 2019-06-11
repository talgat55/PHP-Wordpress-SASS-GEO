new Vue({
    el: '#menu',
    data() {
        return {
            info: null,
            isActive: false
        };
    },
    created() {
        axios
            .get('/wp-json/menus/v1/menus/menu-1')
            .then(response => (this.info = response.data.items ));

    }
});
