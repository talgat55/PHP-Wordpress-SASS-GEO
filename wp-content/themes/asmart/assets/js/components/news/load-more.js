var app = new Vue({
    el: '#news-list',
    data: {
        isFinished: false,
        row: 1, // Record selction position
        buttonText: 'Показать еще',
        posts: ''
    },
    methods: {
        getPosts: function(){

            axios.get( '/wp-content/themes/asmart/ajax.php' , {
                params: {
                    page:  this.row
                }
            })
                .then(function (response) {

                    if(response.data !='' ){

                        app.row++;

                        var len = app.posts.length;
                        if(len > 0){
                            app.buttonText = "Загрузка ...";
                            setTimeout(function() {
                                app.buttonText = "Показать еще";
                                for (let i = 0; i < response.data.length; i++){
                                    app.posts.push(response.data[i]);
                                }

                            },500);
                        }else{
                            app.posts = response.data;
                        }

                    }else{
                        app.buttonText = "Записей больше нет.";
                        app.isFinished = true;
                    }
                });
        }
    },
    created: function(){
        this.getPosts();
    }
});