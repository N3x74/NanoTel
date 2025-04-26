<?php

namespace NanoTel\Request;
use NanoTel\Request\Response;

interface RequestInterface
{
    public static function getUpdates(...$args): Response;

    public static function setWebhook(...$args): Response;

    public static function deleteWebhook(...$args): Response;

    public static function WebhookInfo(...$args): Response;

    public static function getMe(...$args): Response;

    public static function logOut(...$args): Response;

    public static function close(...$args): Response;

    public static function sendMessage(... $args): Response;

    public static function forwardMessage(...$args): Response;

    public static function forwardMessages(...$args): Response;

    public static function copyMessage(...$args): Response;

    public static function copyMessages(...$args): Response;

    public static function sendPhoto(...$args): Response;

    public static function sendAudio(...$args): Response;

    public static function sendDocument(...$args): Response;

    public static function sendVideo(...$args): Response;

    public static function sendAnimation(...$args): Response;

    public static function sendVoice(...$args): Response;

    public static function sendVideoNote(...$args): Response;

    public static function sendPaidMedia(...$args): Response;

    public static function sendMediaGroup(...$args): Response;

    public static function sendLocation(...$args): Response;

    public static function sendVenue(...$args): Response;

    public static function sendContact(...$args): Response;

    public static function sendPoll(...$args): Response;

    public static function sendDice(...$args): Response;

    public static function sendChatAction(...$args): Response;

    public static function setMessageReaction(...$args): Response;

    public static function getUserProfilePhotos(...$args): Response;

    public static function setUserEmojiStatus(...$args): Response;

    public static function getFile(...$args): Response;

    public static function banChatMember(...$args): Response;

    public static function unbanChatMember(...$args): Response;

    public static function restrictChatMember(...$args): Response;

    public static function promoteChatMember(...$args): Response;

    public static function setChatAdministratorCustomTitle(...$args): Response;

    public static function banChatSenderChat(...$args): Response;

    public static function unbanChatSenderChat(...$args): Response;

    public static function setChatPermissions(...$args): Response;

    public static function exportChatInviteLink(...$args): Response;

    public static function createChatInviteLink(...$args): Response;

    public static function editChatInviteLink(...$args): Response;

    public static function createChatSubscriptionInviteLink(...$args): Response;

    public static function editChatSubscriptionInviteLink(...$args): Response;

    public static function revokeChatInviteLink(...$args): Response;

    public static function approveChatJoinRequest(...$args): Response;

    public static function declineChatJoinRequest(...$args): Response;

    public static function setChatPhoto(...$args): Response;

    public static function deleteChatPhoto(...$args): Response;

    public static function setChatTitle(...$args): Response;

    public static function setChatDescription(...$args): Response;

    public static function pinChatMessage(...$args): Response;

    public static function unpinChatMessage(...$args): Response;

    public static function unpinAllChatMessages(...$args): Response;

    public static function leaveChat(...$args): Response;

    public static function getChat(...$args): Response;

    public static function getChatAdministrators(...$args): Response;

    public static function getChatMemberCount(...$args): Response;

    public static function getChatMember(...$args): Response;

    public static function setChatStickerSet(...$args): Response;

    public static function deleteChatStickerSet(...$args): Response;

    public static function getForumTopicIconStickers(...$args): Response;

    public static function createForumTopic(...$args): Response;

    public static function editForumTopic(...$args): Response;

    public static function closeForumTopic(...$args): Response;

    public static function reopenForumTopic(...$args): Response;

    public static function deleteForumTopic(...$args): Response;

    public static function unpinAllForumTopicMessages(...$args): Response;

    public static function editGeneralForumTopic(...$args): Response;

    public static function closeGeneralForumTopic(...$args): Response;

    public static function reopenGeneralForumTopic(...$args): Response;

    public static function hideGeneralForumTopic(...$args): Response;

    public static function unhideGeneralForumTopic(...$args): Response;

    public static function unpinAllGeneralForumTopicMessages(...$args): Response;

    public static function answerCallbackQuery(...$args): Response;

    public static function getUserChatBoosts(...$args): Response;

    public static function getBusinessConnection(...$args): Response;

    public static function setMyCommands(...$args): Response;

    public static function deleteMyCommands(...$args): Response;

    public static function getMyCommands(...$args): Response;

    public static function setMyName(...$args): Response;

    public static function getMyName(...$args): Response;

    public static function setMyDescription(...$args): Response;

    public static function getMyDescription(...$args): Response;

    public static function setMyShortDescription(...$args): Response;

    public static function getMyShortDescription(...$args): Response;

    public static function setChatMenuButton(...$args): Response;

    public static function getChatMenuButton(...$args): Response;

    public static function setMyDefaultAdministratorRights(...$args): Response;

    public static function getMyDefaultAdministratorRights(...$args): Response;

    public static function editMessageText(...$args): Response;

    public static function editMessageCaption(...$args): Response;

    public static function editMessageMedia(...$args): Response;

    public static function editMessageLiveLocation(...$args): Response;

    public static function editMessageReplyMarkup(...$args): Response;

    public static function stopPoll(...$args): Response;

    public static function deleteMessage(...$args): Response;

    public static function deleteMessages(...$args): Response;

    public static function sendSticker(...$args): Response;

    public static function getStickerSet(...$args): Response;

    public static function getCustomEmojiStickers(...$args): Response;

    public static function uploadStickerFile(...$args): Response;

    public static function createNewStickerSet(...$args): Response;

    public static function addStickerToSet(...$args): Response;

    public static function setStickerPositionInSet(...$args): Response;

    public static function deleteStickerFromSet(...$args): Response;

    public static function replaceStickerInSet(...$args): Response;

    public static function setStickerEmojiList(...$args): Response;

    public static function setStickerKeywords(...$args): Response;

    public static function setStickerMaskPosition(...$args): Response;

    public static function setStickerSetTitle(...$args): Response;

    public static function setStickerSetThumbnail(...$args): Response;

    public static function setCustomEmojiStickerSetThumbnail(...$args): Response;

    public static function deleteStickerSet(...$args): Response;

    public static function getAvailableGifts(...$args): Response;

    public static function sendGift(...$args): Response;

    public static function verifyUser(...$args): Response;

    public static function verifyChat(...$args): Response;

    public static function removeUserVerification(...$args): Response;

    public static function removeChatVerification(...$args): Response;

    public static function answerWebAppQuery(...$args): Response;

    public static function SentWebAppMessage(...$args): Response;

    public static function savePreparedInlineMessage(...$args): Response;

    public static function PreparedInlineMessage(...$args): Response;

    public static function sendInvoice(...$args): Response;

    public static function createInvoiceLink(...$args): Response;

    public static function answerShippingQuery(...$args): Response;

    public static function answerPreCheckoutQuery(...$args): Response;

    public static function getStarTransactions(...$args): Response;

    public static function refundStarPayment(...$args): Response;

    public static function editUserStarSubscription(...$args): Response;

    public static function setPassportDataErrors(...$args): Response;

    public static function sendGame(...$args): Response;

    public static function setGameScore(...$args): Response;

    public static function getGameHighScores(...$args): Response;
}
