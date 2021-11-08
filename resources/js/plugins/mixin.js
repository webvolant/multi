import Vue from "vue";

Vue.mixin({
    data() {
        return {
            api_url: 'http://watch2.webeskadra.com/',
        }
    },
    mounted() {
        window.api_url = this.api_url;
    },
    methods: {
        /*capitalizeFirstLetter: str => str.charAt(0).toUpperCase() + str.slice(1),*/
        switchLanguage(value){
            //console.log('lang', value)
            axios.get(this.api_url + '/switch-language/'+value)
                .then(function (response) {
                    //that.data = response.data.template
                    console.log(response);
                    //that.$toast.add({severity:'success', summary: response.data.message, life: 3000});
                })
                .catch(function (error) {
                    console.log(error);
                    //that.errors = error.response.data.errors;
                    //that.$toast.add({severity:'error', summary: error.message, detail:error.response.data.errors, life: 3000});
                    //let detail = error.response.data.errors; that.errors = error.response.data.errors;
                    //if(that.errors === undefined) detail = error.response.data.message; //not validation message

                    //that.$toast.add({severity:'error', summary: error.message, detail:detail});
                });
        },
        translate(value){
            return window._translate[value];
        },

        hasErrorText(key){ //get text of error
            if(this.errors !== undefined)
                if (this.errors.hasOwnProperty(key)) return this.errors[key][0];
            return '';
        },
        hasError(key){ //check only existing error
            if(this.errors !== undefined)
                if (this.errors.hasOwnProperty(key)) return true;
            return false;
        },
    }
});
