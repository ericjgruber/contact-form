window.onload = function() {
  var app = new Vue({
    el: '#app',
    data: {
      visible: false,
      header: 'Contact Form',
      instructions: 'Please fill out the following form below.',
      position: 'Is this position a full-time, direct-to-hire position?',
      yourName: 'Your name:',
      yourEmail: 'Your email:',
      jobDescription: 'Job description'
    },
    methods: {
      isVisible: function() {
        return this.visible = true;
      }
    }
  });
};