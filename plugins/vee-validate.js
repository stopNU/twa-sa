import Vue from 'vue'
import { extend, ValidationProvider, ValidationObserver, Validator } from "vee-validate";
import { required, email } from "vee-validate/dist/rules";
import PhoneNumber from 'awesome-phonenumber'

//import { ValidationProvider } from 'vee-validate';

Vue.component('ValidationProvider', ValidationProvider);
Vue.component('ValidationObserver', ValidationObserver);

extend('email', email);



extend('phone', {
  message (fieldName) {
    return `${fieldName} is not a valid phone number`;
  },
  validate (value) {
    return new Promise(resolve => {
        let phone = new PhoneNumber(value);
        resolve({ valid: phone.isValid() })
    });
  },
  computesRequired: true
});

extend('required', {
  validate (value) {
    return {
      required: true,
      valid: ['', null, undefined].indexOf(value) === -1
    };
  },
  computesRequired: true
});