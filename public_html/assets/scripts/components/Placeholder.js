import $ from 'jquery';


class Placeholder {
  constructor(element) {
    this.$element = $(element);
    this.els = {
      component: this.$element
    };
    this.init();
    this.listen();
  }
  listen(){
    let self = this;
  }
  init(){
    let self = this;
    console.log('init Placeholder component')
  }
}

export default Placeholder;
