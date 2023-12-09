let validation = {
  first_name: {
    rule: {
      required: function (field) {
        if (field) {
          return { error: false, message: ''}
        } else {
          return { error: true, message: 'This field is required.'}
        }
      },

      minLength: function (field, value = 2) {
        if (field && field.length >= value) {
          return { error: false, message: ''}
        } else {
          return { error: true, message: `This field must have minimum ${value} characters length.`}
        }
      }
    },

    error: true,
    message: ''
  },


  middle_name: {
    rule: {
      required: function (field) {
        if (field) {
          return { error: false, message: ''}
        } else {
          return { error: true, message: 'This field is required.'}
        }
      },

      minLength: function (field, value = 2) {
        if (field && field.length >= value) {
          return { error: false, message: ''}
        } else {
          return { error: true, message: `This field must have minimum ${value} characters length.`}
        }
      }
    },

    error: true,
    message: ''
  },


  surname: {
    rule: {
      required: function (field) {
        if (field) {
          return { error: false, message: ''}
        } else {
          return { error: true, message: 'This field is required.'}
        }
      },

      minLength: function (field, value = 2) {
        if (field && field.length >= value) {
          return { error: false, message: ''}
        } else {
          return { error: true, message: `This field must have minimum ${value} characters length.`}
        }
      }
    },

    error: true,
    message: ''
  },


  gender: {
    rule: {
      required: function (field) {
        if (field) {
          return { error: false, message: ''}
        } else {
          return { error: true, message: 'This field is required.'}
        }
      },
    },

    error: true,
    message: ''
  },


  marital_status: {
    rule: {
      required: function (field) {
        if (field) {
          return { error: false, message: ''}
        } else {
          return { error: true, message: 'This field is required.'}
        }
      },
    },

    error: true,
    message: ''
  },


  dob: {
    rule: {
      required: function (field) {
        if (field) {
          return { error: false, message: ''}
        } else {
          return { error: true, message: 'This field is required.'}
        }
      },
    },

    error: true,
    message: ''
  },




  national_id: {
    rule: {
      required: function (field) {
        if (field) {
          return { error: false, message: ''}
        } else {
          return { error: true, message: 'This field is required.'}
        }
      },

      minLength: function (field, value = 2) {
        if (field && field.length >= value) {
          return { error: false, message: ''}
        } else {
          return { error: true, message: `This field must have minimum ${value} characters length.`}
        }
      }
    },

    error: true,
    message: ''
  },


 

  job_type: {
    rule: {
      required: function (field) {
        if (field) {
          return { error: false, message: ''}
        } else {
          return { error: true, message: 'This field is required.'}
        }
      },

      minLength: function (field, value = 2) {
        if (field && field.length >= value) {
          return { error: false, message: ''}
        } else {
          return { error: true, message: `This field must have minimum ${value} characters length.`}
        }
      }
    },

    error: true,
    message: ''
  },



 



}


