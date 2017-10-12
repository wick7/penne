
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

var Vue = require('vue');
Vue.use(require('vue-resource'));
Vue.use(require('vue-moment'));
Vue.use(require('numeral'));
window.moment = require('moment');
window.moment.locale('en-US');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));



var app = new Vue({
  el: "#app",
  data: {
    newUser: {},
    message: 'Hello Vue!',
    items: [
      {
        party: "Nguyen",
        size: 6,
        phone: "+1 (555)-555-5555",
        time: moment().format('h:mm a')
      }
    ]
  },
  methods: {
    addUser: function(e) {
      this.items.push({
        party: this.newUser.party,
        size: this.newUser.size,
        phone: this.newUser.phone,
        time: moment().format('h:mm a')
      });
      this.newUser = {};
      e.preventDefault();
    },
    deleteUser: function(item) {
      console.log("deleted");
      var index = this.items.indexOf(item);
      this.items.splice(index, 1);

    },
    // admin: function(item) {
    //   var password = "x";
    //   var ask = prompt("Enter password: ");
    //   if (ask == password) {
    //     console.log("password");
    //      return this.deleteUser(item);
    //   } else {
    //     console.log("wrong")
    //     alert("Wrong Password. Please re-select an entry and try again.");
    //   };
    // },
    admin: function(item) {
         return this.deleteUser(item);
      },
    shuffle: function() {
      this.items = _.shuffle(this.items);
    }
  }
});
