! function (i) {
    'use strict';

    i('body').on('input propertychange', '.floating-label-form-group', function (o) {
        i(this).toggleClass('floating-label-form-group-with-value', !!i(o.target).val())
    }).on('focus', '.floating-label-form-group', function () {
        i(this).addClass('floating-label-form-group-with-focus')
    }).on('blur', '.floating-label-form-group', function () {
        i(this).removeClass('floating-label-form-group-with-focus')
    });

    if (i(window).width() > 992) {
        var o = i('#mainNav').height();
        i(window).on('scroll', {
            previousTop: 0
        }, function () {
            var s = i(window).scrollTop();
            s < this.previousTop ? s > 0 && i('#mainNav').hasClass('is-fixed') ? i('#mainNav').addClass('is-visible') : i('#mainNav').removeClass('is-visible is-fixed') : s > this.previousTop && (i('#mainNav').removeClass('is-visible'), s > o && !i('#mainNav').hasClass('is-fixed') && i('#mainNav').addClass('is-fixed')), this.previousTop = s
        })
    }

    i('.report').each(function() {
        var commentId = i(this).attr('data-commentid');
        var reportLink = '<a href=\'../reportComment&amp;id=' + commentId + '\'>Signaler ce commmentaire</a>';

        i(this).popover({
            trigger: 'focus',
            html: true,
            content: reportLink
        });
    });

    i('.delChapter').on('click', function() {
        var delLink = 'admin&action=deleteChapter&id=' + i(this).attr('id');
        i('.modal-delete a').attr('href', delLink);
    });

    i('.delComment').on('click', function() {
        var delLink = 'admin&action=deleteComment&id=' + i(this).attr('id');
        i('.modal-delete a').attr('href', delLink);
    });

    i('.delMessage').on('click', function() {
        var delLink = 'admin&action=deleteMessage&id=' + i(this).attr('id');
        i('.modal-delete a').attr('href', delLink);
    });

    i('.validComment').on('click', function() {
        var valLink = 'admin&action=validateComment&id=' + i(this).attr('id');
        i('.modal-validate a').attr('href', valLink);
    });

    i('.editComment').on('click', function() {
        var formAction = 'admin&action=viewReportedComments';
        i('#commentEdit form').attr('action', formAction);
        
        var commentId = i(this).attr('id');
        i('#commentId').attr('value', commentId);

        var commentContentId = '#comment' + commentId;
        var commentContent = i(commentContentId).text();
        i('#newComment').html(i.trim(commentContent));
    });
}(jQuery);