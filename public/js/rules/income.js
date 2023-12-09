let validation = {
  education: {
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


  job_type: {
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


  industry: {
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




  job_title: {
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




  net_monthly_income: {
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





  

}


