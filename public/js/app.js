(function() {
  (function(window, document, $, angular) {
    angular.module('lazymarket', []);
    angular.module('lazymarket-admin', []);
    $(function() {
      $('[data-toggle="tooltip"]').tooltip();
      return true;
    });
    return true;
  })(window, document, window.jQuery, window.angular);

}).call(this);

(function() {
  (function(window, document, $, angular) {
    return true;
  })(window, document, window.jQuery, window.angular);

}).call(this);

(function() {
  (function(window, document, $, angular) {
    var FlattenService;
    FlattenService = (function() {
      function FlattenService() {}

      FlattenService.prototype.flatten = function(obj) {
        var tmp;
        tmp = $.map(obj, function(value, $index) {
          return value;
        });
        return tmp;
      };

      return FlattenService;

    })();
    return angular.module('lazymarket').service('flattenService', [FlattenService]);
  })(window, document, window.jQuery, window.angular);

}).call(this);

(function() {
  (function(window, document, $, angular) {
    var ContactsFactory;
    ContactsFactory = (function() {
      function ContactsFactory() {
        var contacts;
        contacts = {
          'recent': [
            {
              'name': 'Lorem'
            }, {
              'name': 'Ipsum'
            }, {
              'name': 'Dolor'
            }, {
              'name': 'Sit'
            }
          ],
          'followed': [
            {
              'name': 'Amet'
            }, {
              'name': 'Consectuetor'
            }, {
              'name': 'Intex'
            }, {
              'name': 'Ododz'
            }, {
              'name': 'Gwapodz'
            }, {
              'name': 'Weadser'
            }, {
              'name': 'Tersad'
            }, {
              'name': 'Uyter'
            }
          ]
        };
        return contacts;
      }

      return ContactsFactory;

    })();
    return angular.module('lazymarket').factory('contactsFactory', [ContactsFactory]);
  })(window, document, window.jQuery, window.angular);

}).call(this);

(function() {
  (function(window, document, $, angular) {
    var SingleItemFactory;
    SingleItemFactory = (function() {
      function SingleItemFactory() {
        var item;
        item = {
          'id': 1,
          'images': ['images/crow-wallpaper-10.jpg', 'images/bg-02.jpg', 'images/bg-03.jpg', 'images/bg-04.jpg', 'images/bg-04.jpg', 'images/bg-03.jpg', 'images/bg-02.jpg', 'images/bg-01.jpg'],
          'name': 'Item 1',
          'price': 15000,
          'discount': .3,
          'views': 374234,
          'description': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur minus in repellendus recusandae ullam aut quis ducimus deserunt, deleniti quidem illum molestiae. Est optio voluptas perferendis a illo quidem facilis.',
          'stocks': 15,
          'posted_at': 'May 18, 2016',
          'location': 'Cagayan de Oro',
          'category': 'Pets',
          'comments': [
            {
              'name': 'Admin Admin',
              'commented_at': 'May 18, 2016',
              'content': "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis voluptatum voluptatibus rem quaerat perferendis! Ducimus perspiciatis tempore odio minima, rerum sapiente dolor, nihil, ut optio vitae illo. Ut, autem ipsum.",
              'replies': [
                {
                  'name': 'Admin Admin',
                  'commented_at': 'May 18, 2016',
                  'content': "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis voluptatum voluptatibus rem quaerat perferendis! Ducimus perspiciatis tempore odio minima, rerum sapiente dolor, nihil, ut optio vitae illo. Ut, autem ipsum."
                }, {
                  'name': 'Fucc yu',
                  'commented_at': '1 hour ago',
                  'content': "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis voluptatum voluptatibus rem quaerat perferendis! Ducimus."
                }, {
                  'name': 'Fucc yu',
                  'commented_at': '1 hour ago',
                  'content': "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis voluptatum voluptatibus rem quaerat perferendis! Ducimus."
                }
              ]
            }
          ]
        };
        return item;
      }

      return SingleItemFactory;

    })();
    angular.module('lazymarket').factory('singleItemFactory', SingleItemFactory);
    return true;
  })(window, document, window.jQuery, window.angular);

}).call(this);

(function() {
  (function(window, document, $, angular) {
    var AdminDashboardController;
    AdminDashboardController = (function() {
      function AdminDashboardController() {
        this.load();
      }

      AdminDashboardController.prototype.load = function() {
        $(function() {
          $('#lazy-sidebar-admin-toggle').on('click', function(event) {
            $($(this).data('target')).toggleClass('toggled');
            return false;
          });
          $('[data-toggle="lazy-sidebar-menu"]').on('click', function() {
            $(this).parent().toggleClass('active');
            return true;
          });
          return true;
        });
        return true;
      };

      return AdminDashboardController;

    })();
    angular.module('lazymarket-admin').controller('adminDashboardController', AdminDashboardController);
    return true;
  })(window, document, window.jQuery, window.angular);

}).call(this);

(function() {
  (function(window, document, $, angular) {
    var ContactsController;
    ContactsController = (function() {
      ContactsController.prototype.toggled = false;

      ContactsController.prototype.currentCategory = false;

      function ContactsController(contactsFactory, flattenService) {
        this.contactsFactory = contactsFactory;
        this.flattenService = flattenService;
        this.contacts = this.flattenService.flatten(this.contactsFactory);
        this.load();
      }

      ContactsController.prototype.toggleContacts = function(event, contact) {
        event.preventDefault();
        this.currentContact = contact;
        this.toggled = true;
        this.toggledGlobal = false;
        return false;
      };

      ContactsController.prototype.toggleGlobalChatbox = function(event, category) {
        event.preventDefault();
        if (category !== null) {
          this.currentCategory = category;
          this.contacts = this.contactsFactory[category];
          return true;
        }
        this.contacts = this.flattenService.flatten(this.contactsFactory);
        this.toggledGlobal = true;
        this.toggled = false;
        return false;
      };

      ContactsController.prototype.closeChatbox = function(event) {
        event.stopPropagation();
        this.toggled = false;
        return false;
      };

      ContactsController.prototype.closeGlobalChatbox = function(event) {
        event.stopPropagation();
        this.toggledGlobal = false;
        return false;
      };

      ContactsController.prototype.changeCategory = function(event, category) {
        event.preventDefault();
        if (category !== null) {
          this.currentCategory = category;
          this.contacts = this.contactsFactory[category];
          return true;
        }
        this.contacts = this.flattenService.flatten(this.contactsFactory);
        return false;
      };

      ContactsController.prototype.load = function() {
        return $(function() {
          $('.contact-list-container').draggable({
            containment: 'window',
            start: function(event, ui) {
              return $('.contact-list-title').addClass('no-click');
            },
            stop: function(event, ui) {
              return setTimeout(function() {
                return $('.contact-list-title').removeClass('no-click');
              }, 300);
            }
          });
          $('.contact-list-title').on('click', function() {
            if ($(this).hasClass('no-click')) {
              return false;
            }
            $(this).parent().parent().toggleClass('active');
            if ($(this).parent().parent().hasClass('active')) {
              $('.contact-list-title #dropdown-icon').removeClass().addClass('fa fa-caret-up dropdown-icon');
            } else {
              $('.contact-list-title #dropdown-icon').removeClass().addClass('fa fa-caret-down dropdown-icon');
            }
            return true;
          });
          $('.chatbox-title').on('click', function() {
            if ($('.contact-list-title').hasClass('no-click')) {
              return false;
            }
            $(this).next().toggleClass('active');
            $('.chatbox-content').scrollTop(document.getElementById('chatbox-content').scrollHeight);
            return true;
          });
          $('.contact-categories .category a').on('click', function() {
            $.each($('.contact-categories .category'), function() {
              return $(this).removeClass('active');
            });
            $(this).parent().addClass('active');
            return true;
          });
          return true;
        });
      };

      return ContactsController;

    })();
    angular.module('lazymarket').controller('contactsController', ['contactsFactory', 'flattenService', ContactsController]);
    return true;
  })(window, document, window.jQuery, window.angular);

}).call(this);

(function() {
  (function(window, document, $, angular) {
    var FeaturedItemsSettingsController;
    FeaturedItemsSettingsController = (function() {
      function FeaturedItemsSettingsController() {
        this.load();
      }

      FeaturedItemsSettingsController.prototype.load = function() {
        return true;
      };

      return FeaturedItemsSettingsController;

    })();
    angular.module('lazymarket').controller('featuredItemsSettingsController', [FeaturedItemsSettingsController]);
    return true;
  })(window, document, window.jQuery, window.angular);

}).call(this);

(function() {
  (function(window, document, $, angular) {
    var HeaderPanelController;
    HeaderPanelController = (function() {
      function HeaderPanelController() {
        this.load();
      }

      HeaderPanelController.prototype.load = function() {
        return true;
      };

      return HeaderPanelController;

    })();
    angular.module('lazymarket').controller('headerPanelController', HeaderPanelController);
    return true;
  })(window, document, window.jQuery, window.angular);

}).call(this);

(function() {
  (function(window, document, $, angular) {
    var LazyBoxController;
    LazyBoxController = (function() {
      function LazyBoxController() {
        this.load();
      }

      LazyBoxController.prototype.load = function() {
        $(function() {
          var lazyBoxActive;
          lazyBoxActive = false;
          $('.lazy-box-content').on('mouseenter', function() {
            lazyBoxActive = true;
            return true;
          }).on('mouseleave', (function(_this) {
            return function() {
              lazyBoxActive = false;
              return true;
            };
          })(this));
          $('[data-toggle="lazy-box"]').on('click', function(event) {
            event.preventDefault();
            $($(this).attr('href') + ' .lazy-box-content img').attr('src', $(this).children('img').attr('src'));
            $($(this).attr('href')).fadeIn('fast');
            return true;
          });
          $('.lazy-box-wrapper').on('click', function() {
            if (lazyBoxActive === false) {
              $(this).fadeOut('fast');
            }
            return true;
          });
          return true;
        });
        return true;
      };

      return LazyBoxController;

    })();
    angular.module('lazymarket').controller('lazyboxController', [LazyBoxController]);
    return true;
  })(window, document, window.jQuery, window.angular);

}).call(this);

(function() {
  (function(window, document, $, angular) {
    var NotificationsController;
    NotificationsController = (function() {
      function NotificationsController() {
        this.load();
      }

      NotificationsController.prototype.load = function() {
        $(function() {
          $('.notifications-toggle').on('click', function(event) {
            event.preventDefault();
            $(this).parent().toggleClass('active');
            return true;
          });
          return true;
        });
        return true;
      };

      return NotificationsController;

    })();
    angular.module('lazymarket').controller('notificationsController', [NotificationsController]);
    return true;
  })(window, document, window.jQuery, window.angular);

}).call(this);

(function() {
  (function(window, document, $, angular) {
    var ShopBannerController;
    ShopBannerController = (function() {
      function ShopBannerController() {
        this.load();
      }

      ShopBannerController.prototype.load = function() {
        return true;
      };

      return ShopBannerController;

    })();
    angular.module('lazymarket').controller('shopBannerController', [ShopBannerController]);
    return true;
  })(window, document, window.jQuery, window.angular);

}).call(this);

(function() {
  (function(window, document, $, angular) {
    var ShopReviewsController;
    ShopReviewsController = (function() {
      function ShopReviewsController() {
        this.load();
      }

      ShopReviewsController.prototype.load = function() {
        $(function() {
          $('.comment-read-more').on('click', function() {
            if (!$(this).parent().hasClass('active')) {
              $(this).parent().addClass('active');
              $(this).addClass('active');
              $(this).text('Less');
            } else {
              $(this).parent().removeClass('active');
              $(this).removeClass('active');
              $(this).html('More <span class="fa fa-angle-double-down"></span>');
            }
            return true;
          });
          return true;
        });
        return true;
      };

      return ShopReviewsController;

    })();
    angular.module('lazymarket').controller('shopReviewsController', [ShopReviewsController]);
    return true;
  })(window, document, window.jQuery, window.angular);

}).call(this);

(function() {
  (function(window, document, $, angular) {
    var SingleItemController;
    SingleItemController = (function() {
      function SingleItemController(singleItemFactory) {
        this.singleItemFactory = singleItemFactory;
        this.item = this.singleItemFactory;
        this.imageIndex = 0;
        this.setCurrentImage(this.imageIndex);
        this.commentCount = parseInt(this.item.comments.length);
        this.commentCount += parseInt($.map(this.item.comments, function(value, key) {
          return value.replies.length;
        }));
      }

      SingleItemController.prototype.setCurrentImageIndex = function(index) {
        this.imageIndex = index;
        this.setCurrentImage();
        return true;
      };

      SingleItemController.prototype.setCurrentImage = function() {
        this.currentImage = this.item.images[this.imageIndex];
        return true;
      };

      SingleItemController.prototype.nextImageIndex = function(event) {
        event.preventDefault();
        if (this.imageIndex === (this.item.images.length - 1)) {
          this.imageIndex = 0;
          this.setCurrentImage();
          return false;
        }
        if (this.imageIndex < this.item.images.length) {
          this.imageIndex++;
        }
        this.setCurrentImage();
        return true;
      };

      SingleItemController.prototype.prevImageIndex = function(event) {
        event.preventDefault();
        if (this.imageIndex === 0) {
          this.imageIndex = this.item.images.length - 1;
          this.setCurrentImage();
          return false;
        }
        if (this.imageIndex > 0) {
          this.imageIndex--;
        }
        this.setCurrentImage();
        return true;
      };

      SingleItemController.prototype.sendComment = function(event) {
        if (event.keyCode === 13 && !event.shiftKey) {
          event.preventDefault();
          this.commentContent = '';
        }
        return true;
      };

      SingleItemController.prototype.bookmarkItem = function() {
        return true;
      };

      return SingleItemController;

    })();
    angular.module('lazymarket').controller('singleItemController', ['singleItemFactory', SingleItemController]);
    return true;
  })(window, document, window.jQuery, window.angular);

}).call(this);

//# sourceMappingURL=app.js.map
