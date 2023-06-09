"use strict";
var KTCreateAccount = function () {
    var e, t, i, o, r, s, a = [];
    return {
        init: function () {
            (t = document.querySelector("#kt_modal_create_account")) && (e = new bootstrap.Modal(t)), i = document.querySelector("#kt_create_account_stepper"), o = i.querySelector("#kt_create_account_form"), r = i.querySelector('[data-kt-stepper-action="submit"]'), (s = new KTStepper(i)).on("kt.stepper.next", (function (e) {
                console.log("stepper.next");
                var t = a[e.getCurrentStepIndex() - 1];
                t ? t.validate().then((function (t) {
                    console.log("validated!"), "Valid" == t ? (e.goNext(), KTUtil.scrollTop()) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-light"
                        }
                    }).then((function () {
                        KTUtil.scrollTop()
                    }))
                })) : (e.goNext(), KTUtil.scrollTop())
            })), s.on("kt.stepper.previous", (function (e) {
                console.log("stepper.previous"), e.goPrevious(), KTUtil.scrollTop()
            })), a.push(FormValidation.formValidation(o, {
                fields: {
                    account_type: {
                        validators: {
                            notEmpty: {
                                message: "Account type is required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), a.push(FormValidation.formValidation(o, {
                fields: {
                    account_team_size: {
                        validators: {
                            notEmpty: {
                                message: "Time size is required"
                            }
                        }
                    },
                    account_name: {
                        validators: {
                            notEmpty: {
                                message: "Account name is required"
                            }
                        }
                    },
                    account_plan: {
                        validators: {
                            notEmpty: {
                                message: "Account plan is required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), a.push(FormValidation.formValidation(o, {
                fields: {
                    business_name: {
                        validators: {
                            notEmpty: {
                                message: "Busines name is required"
                            }
                        }
                    },
                    business_descriptor: {
                        validators: {
                            notEmpty: {
                                message: "Busines descriptor is required"
                            }
                        }
                    },
                    business_type: {
                        validators: {
                            notEmpty: {
                                message: "Busines type is required"
                            }
                        }
                    },
                    business_description: {
                        validators: {
                            notEmpty: {
                                message: "Busines description is required"
                            }
                        }
                    },
                    business_email: {
                        validators: {
                            notEmpty: {
                                message: "Busines email is required"
                            },
                            emailAddress: {
                                message: "The value is not a valid email address"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), a.push(FormValidation.formValidation(o, {
                fields: {
                    card_name: {
                        validators: {
                            notEmpty: {
                                message: "Name on card is required"
                            }
                        }
                    },
                    card_number: {
                        validators: {
                            notEmpty: {
                                message: "Card member is required"
                            },
                            creditCard: {
                                message: "Card number is not valid"
                            }
                        }
                    },
                    card_expiry_month: {
                        validators: {
                            notEmpty: {
                                message: "Month is required"
                            }
                        }
                    },
                    card_expiry_year: {
                        validators: {
                            notEmpty: {
                                message: "Year is required"
                            }
                        }
                    },
                    card_cvv: {
                        validators: {
                            notEmpty: {
                                message: "CVV is required"
                            },
                            digits: {
                                message: "CVV must contain only digits"
                            },
                            stringLength: {
                                min: 3,
                                max: 4,
                                message: "CVV must contain 3 to 4 digits only"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), r.addEventListener("click", (function (t) {
                let timerInterval
						Swal.fire({
							title: 'Sedang Proses',
							html: 'Mohon bersabar, dan jangan menekan tombol apapun!.',
							timer: 20000,
							timerProgressBar: true,
							onBeforeOpen: () => {
							Swal.showLoading()
							timerInterval = setInterval(() => {
								Swal.getContent().querySelector('b')
								.textContent = Swal.getTimerLeft()
							}, 100)
							},
							onClose: () => {
							clearInterval(timerInterval)
							}
						});
            })), $(o.querySelector('[name="card_expiry_month"]')).on("change", (function () {
                a[3].revalidateField("card_expiry_month")
            })), $(o.querySelector('[name="card_expiry_year"]')).on("change", (function () {
                a[3].revalidateField("card_expiry_year")
            })), $(o.querySelector('[name="business_type"]')).on("change", (function () {
                a[2].revalidateField("business_type")
            }))
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTCreateAccount.init()
}));
