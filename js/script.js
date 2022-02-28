new Vue({
    el: '#app',
    data: {  

        disks: [],
    },
    
    created() {
        axios.get('http://localhost:81/php-ajax-dischi/api/disks.php').then((response) => {
            this.disks = response.data;
        })
    }
});