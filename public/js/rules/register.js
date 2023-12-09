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


  county: {
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


  area: {
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

  address: {
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



  email: {
    rule: {
      required: function (field) {
        if (field) {
          return { error: false, message: ''}
        } else {
          return { error: true, message: 'This field is required.'}
        }
      },
      
      email: function (field) {
        const rgx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        if (rgx.test(field)) {
          return { error: false, message: ''}
        } else {
          return { error: true, message: 'This field has wrong email address format.'}
        }
      }
    },
    error: true,
    message: ''
  },


  phone: {
    rule: {
      required: function (field) {
        if (field) {
          return { error: false, message: ''}
        } else {
          return { error: true, message: 'This field is required.'}
        }
      },
      
      phone: function (field) {
        const rgx = /^(\+254|0)[1-9]\d{8}$/;
        if (rgx.test(field)) {
          return { error: false, message: ''}
        } else {
          return { error: true, message: 'This field has wrong phone address format.'}
        }
      }

    },
    error: true,
    message: ''
  },



  password: {
    rule: {
      required: function (field) {
        if (field) {
          return { error: false, message: ''}
        } else {
          return { error: true, message: 'This field is required.'}
        }
      },

      minLength: function (field, value = 8) {
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


  password_confirmation: {
    rule: {
      required: function (field) {
        if (field) {
          return { error: false, message: ''}
        } else {
          return { error: true, message: 'This field is required.'}
        }
      },
      
      minLength: function (field, value = 8) {
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


