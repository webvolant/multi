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
          <prime-dropdown v-model="data.state_id" :options="state" optionLabel="name" optionValue="id" placeholder="State" />
        </div>



        <div class="p-field p-col-4">
          <prime-dropdown v-model="data.condition_id" :options="condition" optionLabel="name" optionValue="id" placeholder="Condition" />
          <small class="p-invalid" v-if="hasError('condition_id')">{{ hasErrorText('condition_id') }}</small>
        </div>
        <div class="p-field p-col-4">
          <prime-dropdown v-model="data.deliveryset_id" :options="deliveryset" optionLabel="name" optionValue="id" placeholder="Scope of delivery" />
        </div>

        <div class="p-field p-col-4">
          <prime-dropdown v-model="data.deliverytime_id" :options="deliverytime" optionLabel="name" optionValue="id" placeholder="Availability" />
        </div>



        <div class="p-col-12">
          <prime-accordion :multiple="true" :activeIndex="[0,1,2,3,4]">
            <prime-accordiontab header="Basic Information">

              <div class="p-grid">
                <div class="p-field p-col-4">
                  <prime-dropdown v-model="data.brand_id" :options="brand" optionLabel="name" optionValue="id" placeholder="Brand" />
                </div>

                <div class="p-field p-col-4">
                  <prime-dropdown v-model="data.type_id" :options="type" optionLabel="name" optionValue="id" placeholder="Type" />
                </div>

                <div class="p-field p-col-4">
                  <prime-dropdown v-model="data.material_id" :options="material" optionLabel="name" optionValue="id" placeholder="Material" />
                </div>

                <div class="p-field p-col-4">
                  <prime-dropdown v-model="data.strapmaterial_id" :options="strapmaterial" optionLabel="name" optionValue="id" placeholder="Strapmaterial" />
                </div>

                <div class="p-field p-col-4">
                  <prime-dropdown v-model="data.gender_id" :options="gender" optionLabel="name" optionValue="id" placeholder="Gender" />
                </div>

                <div class="p-field p-col-4">
                  <prime-inputtext v-model="data.model" type="text" id="model" :class="{'p-invalid': hasError('model')}" placeholder="model"/>
                  <small class="p-invalid" v-if="hasError('model')">{{ hasErrorText('model') }}</small>
                </div>

                <div class="p-field p-col-4">
                  <prime-inputtext v-model="data.year" type="text" id="year" :class="{'p-invalid': hasError('year')}" placeholder="year"/>
                  <small class="p-invalid" v-if="hasError('year')">{{ hasErrorText('year') }}</small>
                </div>
              </div>


            </prime-accordiontab>
            <prime-accordiontab header="Bracelet">
              <div class="p-grid">
                <div class="p-field p-col-4">
                  <prime-dropdown v-model="data.strapcolor_id" :options="strapcolor" optionLabel="name" optionValue="id" placeholder="strapcolor" />
                </div>

                <div class="p-field p-col-4">
                  <prime-dropdown v-model="data.clasp_id" :options="clasp" optionLabel="name" optionValue="id" placeholder="Clasp" />
                </div>

                <div class="p-field p-col-4">
                  <prime-dropdown v-model="data.claspmaterial_id" :options="claspmaterial" optionLabel="name" optionValue="id" placeholder="Claspmaterial" />
                </div>

                <div class="p-field p-col-4">
                  <prime-inputtext v-model="data.jumper_width" type="text" id="jumper_width" :class="{'p-invalid': hasError('jumper_width')}" placeholder="jumper_width"/>
                  <small class="p-invalid" v-if="hasError('jumper_width')">{{ hasErrorText('jumper_width') }}</small>
                </div>

                <div class="p-field p-col-4">
                  <prime-inputtext v-model="data.clasp_width" type="text" id="clasp_width" :class="{'p-invalid': hasError('clasp_width')}" placeholder="clasp_width"/>
                  <small class="p-invalid" v-if="hasError('clasp_width')">{{ hasErrorText('clasp_width') }}</small>
                </div>


                <div class="p-field p-col-4">
                  <prime-inputtext v-model="data.long_strap_long" type="text" id="long_strap_long" :class="{'p-invalid': hasError('long_strap_long')}" placeholder="long_strap_long"/>
                  <small class="p-invalid" v-if="hasError('long_strap_long')">{{ hasErrorText('long_strap_long') }}</small>
                </div>

                <div class="p-field p-col-4">
                  <prime-inputtext v-model="data.long_strap_short" type="text" id="long_strap_short" :class="{'p-invalid': hasError('long_strap_short')}" placeholder="long_strap_short"/>
                  <small class="p-invalid" v-if="hasError('long_strap_short')">{{ hasErrorText('long_strap_short') }}</small>
                </div>

                <div class="p-field p-col-4">
                  <prime-inputtext v-model="data.strength_strap" type="text" id="strength_strap" :class="{'p-invalid': hasError('strength_strap')}" placeholder="strength_strap"/>
                  <small class="p-invalid" v-if="hasError('strength_strap')">{{ hasErrorText('strength_strap') }}</small>
                </div>

              </div>
            </prime-accordiontab>
            <prime-accordiontab header="Case">
              <div class="p-grid">
                <div class="p-field p-col-4">
                  <prime-dropdown v-model="data.glass_id" :options="glass" optionLabel="name" optionValue="id" placeholder="glass" />
                </div>

                <div class="p-field p-col-4">
                  <prime-dropdown v-model="data.bezelmaterial_id" :options="material" optionLabel="name" optionValue="id" placeholder="material" />
                </div>

                <div class="p-field p-col-4">
                  <prime-dropdown v-model="data.numbersface_id" :options="numbersface" optionLabel="name" optionValue="id" placeholder="numbersface" />
                </div>

                <div class="p-field p-col-4">
                  <prime-dropdown v-model="data.waterresistant_id" :options="waterresistant" optionLabel="name" optionValue="id" placeholder="waterresistant" />
                </div>

                <div class="p-field p-col-4">
                  <prime-dropdown v-model="data.face_id" :options="face" optionLabel="name" optionValue="id" placeholder="face" />
                </div>

                <div class="p-field p-col-4">
                  <prime-inputtext v-model="data.diameter_one" type="text" id="diameter_one" :class="{'p-invalid': hasError('diameter_one')}" placeholder="diameter_one"/>
                  <small class="p-invalid" v-if="hasError('diameter_one')">{{ hasErrorText('diameter_one') }}</small>
                </div>

                <div class="p-field p-col-4">
                  <prime-inputtext v-model="data.diameter_two" type="text" id="diameter_two" :class="{'p-invalid': hasError('diameter_two')}" placeholder="diameter_two"/>
                  <small class="p-invalid" v-if="hasError('diameter_two')">{{ hasErrorText('diameter_two') }}</small>
                </div>


                <div class="p-field p-col-4">
                  <prime-inputtext v-model="data.diameter_height" type="text" id="diameter_height" :class="{'p-invalid': hasError('diameter_height')}" placeholder="diameter_height"/>
                  <small class="p-invalid" v-if="hasError('diameter_height')">{{ hasErrorText('diameter_height') }}</small>
                </div>

              </div>
            </prime-accordiontab>

            <prime-accordiontab header="Caliber">
              <div class="p-grid">

                <div class="p-field p-col-4">
                  <prime-inputtext v-model="data.caliber" type="text" id="caliber" :class="{'p-invalid': hasError('caliber')}" placeholder="caliber"/>
                  <small class="p-invalid" v-if="hasError('caliber')">{{ hasErrorText('caliber') }}</small>
                </div>

                <div class="p-field p-col-4">
                  <prime-inputtext v-model="data.base_caliber" type="text" id="base_caliber" :class="{'p-invalid': hasError('base_caliber')}" placeholder="base_caliber"/>
                  <small class="p-invalid" v-if="hasError('base_caliber')">{{ hasErrorText('base_caliber') }}</small>
                </div>


                <div class="p-field p-col-4">
                  <prime-inputtext v-model="data.power_reserve" type="text" id="power_reserve" :class="{'p-invalid': hasError('power_reserve')}" placeholder="power_reserve"/>
                  <small class="p-invalid" v-if="hasError('power_reserve')">{{ hasErrorText('power_reserve') }}</small>
                </div>

                <div class="p-field p-col-4">
                  <prime-inputtext v-model="data.number_stars" type="text" id="number_stars" :class="{'p-invalid': hasError('number_stars')}" placeholder="number_stars"/>
                  <small class="p-invalid" v-if="hasError('number_stars')">{{ hasErrorText('number_stars') }}</small>
                </div>

                <div class="p-field p-col-4">
                  <prime-inputtext v-model="data.oscillation" type="text" id="oscillation" :class="{'p-invalid': hasError('oscillation')}" placeholder="oscillation"/>
                  <small class="p-invalid" v-if="hasError('oscillation')">{{ hasErrorText('oscillation') }}</small>
                </div>

              </div>
            </prime-accordiontab>
            <prime-accordiontab header="Functions">
              <div class="p-grid">

                <div class="p-col-12">
                  <div v-for="func in functions" :key="func.id" class="p-field-checkbox">
                    <prime-checkbox :id="func.id" name="func" :value="func" v-model="data.functions"/>
                    <label :for="func.id">{{func.name}}</label>
                  </div>
                  <small class="p-invalid" v-if="hasError('functions')">{{ hasErrorText('functions') }}</small>
                </div>

              </div>
            </prime-accordiontab>

            <prime-accordiontab header="Others">
              <div class="p-grid">

                <div class="p-col-12">
                  <div v-for="other in others" :key="other.id" class="p-field-checkbox">
                    <prime-checkbox :id="other.id" name="other" :value="other" v-model="data.others"/>
                    <label :for="other.id">{{other.name}}</label>
                  </div>
                  <small class="p-invalid" v-if="hasError('others')">{{ hasErrorText('others') }}</small>
                </div>

              </div>
            </prime-accordiontab>

          </prime-accordion>
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
			/*if(Object.keys(this.item).length === 0){
				this.data = {
					title:'',
					slug:'',
					//properties: {
          //  functions: [],
          //  material: [],
          //},
					functions: [],
					others: [],
					material_id: null,
					condition_id: null,
				};
				console.log('new');
			}else{*/
				this.data = this.item;
				//this.data.properties = [];
				//this.data.properties = JSON.parse(this.item.properties);
				this.data.functions = JSON.parse(this.item.functions);
				console.log(this.data);
			//}
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
					//that.errors = error.response.data.errors;

					//that.$toast.add({severity:'error', summary: error.message, detail:error.response.data.errors, life: 3000});
					
					let detail = error.response.data.errors; that.errors = error.response.data.errors;
                    if(that.errors === undefined) detail = error.response.data.message; //not validation message

                    that.$toast.add({severity:'error', summary: error.message, detail:detail});
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