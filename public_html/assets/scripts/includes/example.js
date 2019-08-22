const $ = window.jQuery;

export function example() {
  let els = {};

  let listen = function () { };

  return {
    init: function () {
      console.log('init example include');
      els = {

      };
      listen();
    }
  };
};
