<?php

namespace NanoTel\Request;
use NanoTel\Request\Response;

interface RequestInterface
{
    public static function getUpdates(array $args = []): Response;

    public static function setWebhook(array $args = []): Response;

    public static function deleteWebhook(array $args = []): Response;

    public static function WebhookInfo(array $args = []): Response;

    public static function getMe(array $args = []): Response;

    public static function logOut(array $args = []): Response;

    public static function close(array $args = []): Response;

    public static function sendMessage(... $args): Response;

    public static function forwardMessage(array $args = []): Response;

    public static function forwardMessages(array $args = []): Response;

    public static function copyMessage(array $args = []): Response;

    public static function copyMessages(array $args = []): Response;

    public static function sendPhoto(array $args = []): Response;

    public static function sendAudio(array $args = []): Response;

    public static function sendDocument(array $args = []): Response;

    public static function sendVideo(array $args = []): Response;

    public static function sendAnimation(array $args = []): Response;

    public static function sendVoice(array $args = []): Response;

    public static function sendVideoNote(array $args = []): Response;

    public static function sendPaidMedia(array $args = []): Response;

    public static function sendMediaGroup(array $args = []): Response;

    public static function sendLocation(array $args = []): Response;

    public static function sendVenue(array $args = []): Response;

    public static function sendContact(array $args = []): Response;

    public static function sendPoll(array $args = []): Response;

    public static function sendDice(array $args = []): Response;

    public static function sendChatAction(array $args = []): Response;

    public static function setMessageReaction(array $args = []): Response;

    public static function getUserProfilePhotos(array $args = []): Response;

    public static function setUserEmojiStatus(array $args = []): Response;

    public static function getFile(array $args = []): Response;

    public static function banChatMember(array $args = []): Response;

    public static function unbanChatMember(array $args = []): Response;

    public static function restrictChatMember(array $args = []): Response;

    public static function promoteChatMember(array $args = []): Response;

    public static function setChatAdministratorCustomTitle(array $args = []): Response;

    public static function banChatSenderChat(array $args = []): Response;

    public static function unbanChatSenderChat(array $args = []): Response;

    public static function setChatPermissions(array $args = []): Response;

    public static function exportChatInviteLink(array $args = []): Response;

    public static function createChatInviteLink(array $args = []): Response;

    public static function editChatInviteLink(array $args = []): Response;

    public static function createChatSubscriptionInviteLink(array $args = []): Response;

    public static function editChatSubscriptionInviteLink(array $args = []): Response;

    public static function revokeChatInviteLink(array $args = []): Response;

    public static function approveChatJoinRequest(array $args = []): Response;

    public static function declineChatJoinRequest(array $args = []): Response;

    public static function setChatPhoto(array $args = []): Response;

    public static function deleteChatPhoto(array $args = []): Response;

    public static function setChatTitle(array $args = []): Response;

    public static function setChatDescription(array $args = []): Response;

    public static function pinChatMessage(array $args = []): Response;

    public static function unpinChatMessage(array $args = []): Response;

    public static function unpinAllChatMessages(array $args = []): Response;

    public static function leaveChat(array $args = []): Response;

    public static function getChat(array $args = []): Response;

    public static function getChatAdministrators(array $args = []): Response;

    public static function getChatMemberCount(array $args = []): Response;

    public static function getChatMember(array $args = []): Response;

    public static function setChatStickerSet(array $args = []): Response;

    public static function deleteChatStickerSet(array $args = []): Response;

    public static function getForumTopicIconStickers(array $args = []): Response;

    public static function createForumTopic(array $args = []): Response;

    public static function editForumTopic(array $args = []): Response;

    public static function closeForumTopic(array $args = []): Response;

    public static function reopenForumTopic(array $args = []): Response;

    public static function deleteForumTopic(array $args = []): Response;

    public static function unpinAllForumTopicMessages(array $args = []): Response;

    public static function editGeneralForumTopic(array $args = []): Response;

    public static function closeGeneralForumTopic(array $args = []): Response;

    public static function reopenGeneralForumTopic(array $args = []): Response;

    public static function hideGeneralForumTopic(array $args = []): Response;

    public static function unhideGeneralForumTopic(array $args = []): Response;

    public static function unpinAllGeneralForumTopicMessages(array $args = []): Response;

    public static function answerCallbackQuery(array $args = []): Response;

    public static function getUserChatBoosts(array $args = []): Response;

    public static function getBusinessConnection(array $args = []): Response;

    public static function setMyCommands(array $args = []): Response;

    public static function deleteMyCommands(array $args = []): Response;

    public static function getMyCommands(array $args = []): Response;

    public static function setMyName(array $args = []): Response;

    public static function getMyName(array $args = []): Response;

    public static function setMyDescription(array $args = []): Response;

    public static function getMyDescription(array $args = []): Response;

    public static function setMyShortDescription(array $args = []): Response;

    public static function getMyShortDescription(array $args = []): Response;

    public static function setChatMenuButton(array $args = []): Response;

    public static function getChatMenuButton(array $args = []): Response;

    public static function setMyDefaultAdministratorRights(array $args = []): Response;

    public static function getMyDefaultAdministratorRights(array $args = []): Response;

    public static function editMessageText(array $args = []): Response;

    public static function editMessageCaption(array $args = []): Response;

    public static function editMessageMedia(array $args = []): Response;

    public static function editMessageLiveLocation(array $args = []): Response;

    public static function editMessageReplyMarkup(array $args = []): Response;

    public static function stopPoll(array $args = []): Response;

    public static function deleteMessage(array $args = []): Response;

    public static function deleteMessages(array $args = []): Response;

    public static function sendSticker(array $args = []): Response;

    public static function getStickerSet(array $args = []): Response;

    public static function getCustomEmojiStickers(array $args = []): Response;

    public static function uploadStickerFile(array $args = []): Response;

    public static function createNewStickerSet(array $args = []): Response;

    public static function addStickerToSet(array $args = []): Response;

    public static function setStickerPositionInSet(array $args = []): Response;

    public static function deleteStickerFromSet(array $args = []): Response;

    public static function replaceStickerInSet(array $args = []): Response;

    public static function setStickerEmojiList(array $args = []): Response;

    public static function setStickerKeywords(array $args = []): Response;

    public static function setStickerMaskPosition(array $args = []): Response;

    public static function setStickerSetTitle(array $args = []): Response;

    public static function setStickerSetThumbnail(array $args = []): Response;

    public static function setCustomEmojiStickerSetThumbnail(array $args = []): Response;

    public static function deleteStickerSet(array $args = []): Response;

    public static function getAvailableGifts(array $args = []): Response;

    public static function sendGift(array $args = []): Response;

    public static function verifyUser(array $args = []): Response;

    public static function verifyChat(array $args = []): Response;

    public static function removeUserVerification(array $args = []): Response;

    public static function removeChatVerification(array $args = []): Response;

    public static function answerWebAppQuery(array $args = []): Response;

    public static function SentWebAppMessage(array $args = []): Response;

    public static function savePreparedInlineMessage(array $args = []): Response;

    public static function PreparedInlineMessage(array $args = []): Response;

    public static function sendInvoice(array $args = []): Response;

    public static function createInvoiceLink(array $args = []): Response;

    public static function answerShippingQuery(array $args = []): Response;

    public static function answerPreCheckoutQuery(array $args = []): Response;

    public static function getStarTransactions(array $args = []): Response;

    public static function refundStarPayment(array $args = []): Response;

    public static function editUserStarSubscription(array $args = []): Response;

    public static function setPassportDataErrors(array $args = []): Response;

    public static function sendGame(array $args = []): Response;

    public static function setGameScore(array $args = []): Response;

    public static function getGameHighScores(array $args = []): Response;
}
