var app = new Vue({
    el: '#news-list',
    data: {
        isFinished: false,
        row: 0, // Record selction position
        rowperpage: 3, // Number of records fetch at a time
        buttonText: 'Показать еще',
        posts: ''
    },
    methods: {
        getPosts: function(){

            axios.post( myajax.url , {
                action: 'be_ajax_load_media',
                page: 2
            })
                .then(function (response) {

                    if(response.data !='' ){

                        // Update rowperpage
                        app.row+=app.rowperpage;

                        var len = app.posts.length;
                        if(len > 0){
                            app.buttonText = "Loading ...";
                            setTimeout(function() {
                                app.buttonText = "Load More";

                                app.posts.push(response.data);
                                console.log(response.data);

                            },500);
                        }else{
                            app.posts = response.data;
                        }

                    }else{
                        app.buttonText = "No more records avaiable.";
                        app.isFinished = true;
                    }
                });
        }
    },
    created: function(){
        this.getPosts();
    }
});