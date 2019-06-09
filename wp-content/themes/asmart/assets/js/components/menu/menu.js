// Vue.component('menu-item', {
//     props: ['theme'],
//
//     template: `<li class="item-menu title flex-space-beetwen" v-bind:class="theme">
//     <a class=""  href="{{ href }}" v-on:click="toggle" v-bind:class="{ active: show }">
//     <slot name="title">Пункт</slot>
//     <slot name="icon"><i class="fa fa-angle-down title-icon" v-bind:class="{ rotate: show }"></i></slot>
//
//     </a>
//     <transition name="accordion"
//       v-on:before-enter="beforeEnter" v-on:enter="enter"
//       v-on:before-leave="beforeLeave" v-on:leave="leave">
//
//           <slot></slot>
//
//     </transition>
//   </li>`,
//
//     data() {
//         return {
//             show: false,
//             icon: true
//         };
//     },
//
//     methods: {
//         toggle: function() {
//             this.show = !this.show;
//         },
//         // enter: function(el, done) {
//         //   $(el).slideDown(150, done);
//         // },
//         // leave: function(el, done) {
//         //   $(el).slideUp(150, done);
//         // },
//         beforeEnter: function(el) {
//             el.style.height = '0';
//         },
//         enter: function(el) {
//             el.style.height = el.scrollHeight + 'px';
//         },
//         beforeLeave: function(el) {
//             el.style.height = el.scrollHeight + 'px';
//         },
//         leave: function(el) {
//             el.style.height = '0';
//         }
//     }
// });


Vue.component('menu-item', {
    props: ['theme'],

    template: `<div class="accordion" v-bind:class="theme">
   
    <a class="title flex-space-beetwen" href="{{ href }}"    v-on:click="toggle" v-bind:class="{ active: show }">
      <slot name="title">HINT</slot>
      <i class="fa   fa-angle-down title-icon" v-bind:class="{ rotate: show }"></i>
    </a>
    <transition name="accordion"
      v-on:before-enter="beforeEnter" v-on:enter="enter"
      v-on:before-leave="beforeLeave" v-on:leave="leave">
      <div class="content" v-show="show">
        <div class="content-inner">
          <slot></slot>
        </div>
      </div>
    </transition>
  </div>`,

    data() {
        return {
            show: false
        };
    },

    methods: {
        toggle: function() {
            this.show = !this.show;
        },
        // enter: function(el, done) {
        //   $(el).slideDown(150, done);
        // },
        // leave: function(el, done) {
        //   $(el).slideUp(150, done);
        // },
        beforeEnter: function(el) {
            el.style.height = '0';
        },
        enter: function(el) {
            el.style.height = el.scrollHeight + 'px';
        },
        beforeLeave: function(el) {
            el.style.height = el.scrollHeight + 'px';
        },
        leave: function(el) {
            el.style.height = '0';
        }
    }
});

const vm = new Vue({
    el: '#menu',
    props: ['href']
});
