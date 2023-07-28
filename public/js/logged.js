$(document).ready(function() {

    setRightMargin();
    // Call the function whenever the window is resized (to handle responsive design)
    $(window).resize(function() {
    setRightMargin();
    });

    $('#messenger').on('click', function() {
    $('.profile-container').hide();
    $('.notification-container').hide();
    var messengerContainer = $('.messenger-container');

    // Check if the messenger container is hidden
    if (messengerContainer.is(':hidden')) {
    $('.no-messages-message').hide(); // Initially hide the "No messages yet" message
    $('.loading-message').show();
    
    $.ajax({
    url: '/get-message',
    method: 'GET',
    success: function(data) {
      $('.loading-message').hide();
      if (data.status === true && data.data.length > 0) {
       
        messengerContainer.find('.main').empty();

        data.data.forEach(function(message) {
          var receiverName = message.receiver.name.split(' ')[0];
          var body = message.body;
          var truncatedBody = body.length > 20 ? body.substring(0, 20) + '...' : body;
          var timestamp = calculateTimeAgo(message.created_at);
          var messageHTML = `
            <div class="container px-0 pb-1 px-2">
              <div class="row mx-0 bg-white rounded">
                <div class="col-auto px-1">
                  <img src="/uploads/1.jpg" alt="User 1 Avatar" class="chat_avatar">
                </div>
                <div class="col px-0 mx-1">
                  <div class="row mx-0">
                    <div class="col-5 px-0 text-start">${receiverName}</div>
                    <div class="col-7 px-0 text-end fw-lighter">
                      <small>${timestamp}</small>
                    </div>
                  </div>
                  <div class="row mx-0 text-start">
                    <p class="my-0 px-0 fw-lighter">${truncatedBody}</p>
                  </div>
                </div>
              </div>
            </div>
          `;

          messengerContainer.find('.main').append(messageHTML);
        });

        // Show the messenger container after adding the messages
        messengerContainer.toggle();
      } else {
        console.log('No messages found');
        
        $('.loading-message').remove();
        $('.no-messages-message').show();
        messengerContainer.show();
        
      }
    },
    error: function(xhr, status, error) {
      console.error('Error fetching messages:', error);
      $('.loading-message').hide();
    }
    });
    } else {
    // If the messenger container is already open, just toggle it to hide it
    messengerContainer.toggle();
    }
    });


    $('#notification').on('click', function() {
    $('.messenger-container').hide();
    $('.profile-container').hide();
    $('.notification-container').toggle();
    });

    $('#profile').on('click', function() {
    $('.messenger-container').hide();
    $('.notification-container').hide();
    $('.profile-container').toggle();
    });

    // Hide all containers when clicking outside
    $(document).on('click', function(event) {
    if (
      !$(event.target).closest('#messenger, #notification, #profile').length &&
      !$(event.target).closest('.messenger-container, .notification-container, .profile-container').length
    ) {
      $('.messenger-container, .notification-container, .profile-container').hide();
    }
    });
    });
    // Function to calculate the time ago
    function calculateTimeAgo(createdAt) {
    var now = new Date();
    var createdDate = new Date(createdAt);

    var timeDiff = now - createdDate;
    var secondsDiff = Math.floor(timeDiff / 1000);

    if (secondsDiff < 60) {
    return secondsDiff + ' seconds ago';
    } else if (secondsDiff < 3600) {
    var minutesDiff = Math.floor(secondsDiff / 60);
    return minutesDiff + ' minutes ago';
    } else if (secondsDiff < 86400) {
    var hoursDiff = Math.floor(secondsDiff / 3600);
    return hoursDiff + ' hours ago';
    } else if (secondsDiff < 2592000) {
    var daysDiff = Math.floor(secondsDiff / 86400);
    return daysDiff + ' days ago';
    } else if (secondsDiff < 31536000) {
    var monthsDiff = Math.floor(secondsDiff / 2592000);
    return monthsDiff + ' months ago';
    } else {
    var yearsDiff = Math.floor(secondsDiff / 31536000);
    return yearsDiff + ' years ago';
    }
    }
    function setRightMargin() {
    // For Messenger container
    var messengerIconWidth = $('#messenger i').outerWidth(true);
    var messengerRightMargin = $(window).width() - ($('#messenger').offset().left + messengerIconWidth) - 50;
    $('.messenger-container').css('right', messengerRightMargin + 'px');

    // For Notification container
    var notificationIconWidth = $('#notification i').outerWidth(true);
    var notificationRightMargin = $(window).width() - ($('#notification').offset().left + notificationIconWidth) -100;
    $('.notification-container').css('right', notificationRightMargin + 'px');
    }