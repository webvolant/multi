<template>
  <div class="">
    <form class="" @submit.prevent="submit" ref="form">
      <div class="p-grid p-fluid p-formgrid">
        <div class="p-field p-col-12 p-md-6">
          <label for="title">Title</label>
          <prime-inputtext v-model="data.title" type="text" id="title" :class="{'p-invalid': hasError('title')}"/>
          <small class="p-invalid" v-if="hasError('title')">{{ hasErrorText('title') }}</small>
        </div>

        <div class="p-field p-col-12 p-md-6">
          <label for="slug">Slug</label>
          <prime-inputtext v-model="data.slug" type="text" id="slug" :class="{'p-invalid': hasError('slug')}"/>
          <small class="p-invalid" v-if="hasError('slug')">{{ hasErrorText('slug') }}</small>
        </div>


          <div class="p-col-4">
            <prime-dropdown v-model="data.material_id" :options="material" optionLabel="name" optionValue="id" placeholder="Material" />
          </div>
          <div class="p-col">
            <prime-dropdown v-model="data.condition_id" :options="condition" optionLabel="name" optionValue="id" placeholder="Condition" />
          </div>
          <div class="p-col">

          </div>



        <div class="p-col-12">
          <div v-for="func in functions" :key="func.id" class="p-field-checkbox">
            <prime-checkbox :id="func.id" name="func" :value="func" v-model="data.functions"/>
            <label :for="func.id">{{func.name}}</label>
          </div>13
          <small class="p-invalid" v-if="hasError('functions')">{{ hasErrorText('functions') }}</small>
        </div>


        <div class="p-col-12">
          <button class="btn btn-primary float-left" type="submit">Сохранить</button>
        </div>
      </div>
    </form>
  </div>
</template>

<script>

	export default {
		props:[
			'bezelmaterial', 'brand', 'clasp', 'claspmaterial',
			'deliveryset', 'deliverytime', 'face', 'gender',
			'glass', 'numbersface', 'strapcolor', 'strapmaterial',
			'waterresistant', 'type', 'functions', 'others',
			'item', 'material', 'functions', 'condition', 'state',
    ],
		data() {
			return {
				data: [],
				//message:null,
				//type_message:null,
				errors:[],
				//placeholders:[],
				//selectedCategories:[],
			}
		},
		/*components:{
      'helpers':helpers,
    },*/
		mounted() {
			//this.getPlaceholders();
			if(Object.keys(this.item).length === 0){
				this.data = {
					title:'',
          slug:'',
          /*properties: {
	          functions: [],
	          material: [],
          },*/
					functions: [],
					others: [],
					material_id: null,
					condition_id: null,
				};
				console.log('new');
			}else{
				this.data = this.item;
				//this.data.properties = [];
				//this.data.properties = JSON.parse(this.item.properties);
				this.data.functions = JSON.parse(this.item.functions);
				console.log(this.data);
			}
		},
		methods:{
			hasErrorText(key){
				if(this.errors !== undefined)
					if (this.errors.hasOwnProperty(key)) return this.errors[key][0];
				return '';
			},
			hasError(key){
				if(this.errors !== undefined)
					if (this.errors.hasOwnProperty(key)) return true;
				return false;
			},
			/*getPlaceholders(){
				let that = this;
				let url = '/mailapi/api/v1/get-placeholders';
				axios({ method: 'get', url: url,
				}).then(function (response) { console.log(response); that.placeholders = response.data.placeholders
				}).catch(function (error) { console.log('error', error); });
			},*/

			submit:function(){
				let that = this;
				that.errors = [];

				let url = '/public/index.php/product/store'; let method = 'post';
				if("id" in that.data){
					url = '/public/index.php/product/update/'+that.data.id; method = 'post';
				}

				axios({method: method, url:url, data:that.data})
				.then(function (response) {
					that.$toast.add({severity:'success', summary: response.data.message, life: 3000});
				})
				.catch(function (error) {
					that.errors = error.response.data.errors;

					that.$toast.add({severity:'error', summary: error.message, detail:error.response.data.errors, life: 3000});
				});

			}
		}
	}
</script>
<!--<div class="p-col-12">
          <div v-for="func of placeholders" :key="func.value" class="p-field-checkbox">
            <prime-checkbox :id="func.value" name="func" :value="func" v-model="data.functions"/>
            <label :for="func.value">{{func.text}}</label>
          </div>
          <small class="p-invalid" v-if="hasError('functions')">{{ hasErrorText('functions') }}</small>
        </div>

        <div class="p-col-12">
          <div v-for="(other,index) of placeholders" :key="index" class="p-field-checkbox">
            <prime-checkbox :id="other.value" name="other" :value="other" v-model="data.others"/>
            <label :for="other.value">{{other.text}}</label>
          </div>
          <small class="p-invalid" v-if="hasError('others')">{{ hasErrorText('others') }}</small>
        </div>-->