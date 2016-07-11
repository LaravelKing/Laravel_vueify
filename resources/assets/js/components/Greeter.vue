<style scoped>
h2 {
  color: #f66;
}
.panel-heading span{
    float : right;
}
</style>

<template>
    <div class="panel-heading" @click="dismiss(heading)">{{ heading }}
            <span class="glyphicon" :class="is_icon ? ico_up : ico_down"></span>
    </div>
</template>

<script>
  export default {
    props: ['heading'],

    data() {
      return {
        reversed: {},
        ico_up : "glyphicon-chevron-up",
        ico_down : "glyphicon-chevron-down",
        is_icon : false,
      }
    },

    compiled: function () {
        // initialize re verse state
        self = this;
        heading = this.heading;
        this.reversed = Object.assign({}, this.reversed, { heading: false });
      },

    methods: {
      dismiss(heading) {
        this.reversed["heading"] = !this.reversed["heading"];
        this.is_icon =  this.reversed["heading"];
        var panel = this.$el.parentElement.getElementsByClassName("panel_body")[0];
        if($(panel).css("display") == "none"){
            $(panel).css("display", "block");
        }
        else
            $(panel).css("display", "none");
      },
    },
  }
</script>