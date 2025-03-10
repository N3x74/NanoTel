<?php

namespace NanoTel\Request;

use NanoTel\Http\HttpClient;
use NanoTel\Request\RequestInterface;
use NanoTel\Request\Response;

class Request implements RequestInterface
{
    public static function getUpdates(array $args = []): Response
    {
        return new Response(HttpClient::request("getUpdates", $args));
    }

    public static function setWebhook(array $args = []): Response
    {
        return new Response(HttpClient::request("setWebhook", $args));
    }

    public static function deleteWebhook(array $args = []): Response
    {
        return new Response(HttpClient::request("deleteWebhook", $args));
    }

    public static function WebhookInfo(array $args = []): Response
    {
        return new Response(HttpClient::request("WebhookInfo", $args));
    }

    public static function getMe(array $args = []): Response
    {
        return new Response(HttpClient::request("getMe", $args));
    }

    public static function logOut(array $args = []): Response
    {
        return new Response(HttpClient::request("logOut", $args));
    }

    public static function close(array $args = []): Response
    {
        return new Response(HttpClient::request("close", $args));
    }

    public static function sendMessage(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        
        return new Response(HttpClient::request("sendMessage", $args));
    }
    

    public static function forwardMessage(array $args = []): Response
    {
        return new Response(HttpClient::request("forwardMessage", $args));
    }

    public static function forwardMessages(array $args = []): Response
    {
        return new Response(HttpClient::request("forwardMessages", $args));
    }

    public static function copyMessage(array $args = []): Response
    {
        return new Response(HttpClient::request("copyMessage", $args));
    }

    public static function copyMessages(array $args = []): Response
    {
        return new Response(HttpClient::request("copyMessages", $args));
    }

    public static function sendPhoto(array $args = []): Response
    {
        return new Response(HttpClient::request("sendPhoto", $args));
    }

    public static function sendAudio(array $args = []): Response
    {
        return new Response(HttpClient::request("sendAudio", $args));
    }

    public static function sendDocument(array $args = []): Response
    {
        return new Response(HttpClient::request("sendDocument", $args));
    }

    public static function sendVideo(array $args = []): Response
    {
        return new Response(HttpClient::request("sendVideo", $args));
    }

    public static function sendAnimation(array $args = []): Response
    {
        return new Response(HttpClient::request("sendAnimation", $args));
    }

    public static function sendVoice(array $args = []): Response
    {
        return new Response(HttpClient::request("sendVoice", $args));
    }

    public static function sendVideoNote(array $args = []): Response
    {
        return new Response(HttpClient::request("sendVideoNote", $args));
    }

    public static function sendPaidMedia(array $args = []): Response
    {
        return new Response(HttpClient::request("sendPaidMedia", $args));
    }

    public static function sendMediaGroup(array $args = []): Response
    {
        return new Response(HttpClient::request("sendMediaGroup", $args));
    }

    public static function sendLocation(array $args = []): Response
    {
        return new Response(HttpClient::request("sendLocation", $args));
    }

    public static function sendVenue(array $args = []): Response
    {
        return new Response(HttpClient::request("sendVenue", $args));
    }

    public static function sendContact(array $args = []): Response
    {
        return new Response(HttpClient::request("sendContact", $args));
    }

    public static function sendPoll(array $args = []): Response
    {
        return new Response(HttpClient::request("sendPoll", $args));
    }

    public static function sendDice(array $args = []): Response
    {
        return new Response(HttpClient::request("sendDice", $args));
    }

    public static function sendChatAction(array $args = []): Response
    {
        return new Response(HttpClient::request("sendChatAction", $args));
    }

    public static function setMessageReaction(array $args = []): Response
    {
        return new Response(HttpClient::request("setMessageReaction", $args));
    }

    public static function getUserProfilePhotos(array $args = []): Response
    {
        return new Response(HttpClient::request("getUserProfilePhotos", $args));
    }

    public static function setUserEmojiStatus(array $args = []): Response
    {
        return new Response(HttpClient::request("setUserEmojiStatus", $args));
    }

    public static function getFile(array $args = []): Response
    {
        return new Response(HttpClient::request("getFile", $args));
    }

    public static function banChatMember(array $args = []): Response
    {
        return new Response(HttpClient::request("banChatMember", $args));
    }

    public static function unbanChatMember(array $args = []): Response
    {
        return new Response(HttpClient::request("unbanChatMember", $args));
    }

    public static function restrictChatMember(array $args = []): Response
    {
        return new Response(HttpClient::request("restrictChatMember", $args));
    }

    public static function promoteChatMember(array $args = []): Response
    {
        return new Response(HttpClient::request("promoteChatMember", $args));
    }

    public static function setChatAdministratorCustomTitle(array $args = []): Response
    {
        return new Response(HttpClient::request("setChatAdministratorCustomTitle", $args));
    }

    public static function banChatSenderChat(array $args = []): Response
    {
        return new Response(HttpClient::request("banChatSenderChat", $args));
    }

    public static function unbanChatSenderChat(array $args = []): Response
    {
        return new Response(HttpClient::request("unbanChatSenderChat", $args));
    }

    public static function setChatPermissions(array $args = []): Response
    {
        return new Response(HttpClient::request("setChatPermissions", $args));
    }

    public static function exportChatInviteLink(array $args = []): Response
    {
        return new Response(HttpClient::request("exportChatInviteLink", $args));
    }

    public static function createChatInviteLink(array $args = []): Response
    {
        return new Response(HttpClient::request("createChatInviteLink", $args));
    }

    public static function editChatInviteLink(array $args = []): Response
    {
        return new Response(HttpClient::request("editChatInviteLink", $args));
    }

    public static function createChatSubscriptionInviteLink(array $args = []): Response
    {
        return new Response(HttpClient::request("createChatSubscriptionInviteLink", $args));
    }

    public static function editChatSubscriptionInviteLink(array $args = []): Response
    {
        return new Response(HttpClient::request("editChatSubscriptionInviteLink", $args));
    }

    public static function revokeChatInviteLink(array $args = []): Response
    {
        return new Response(HttpClient::request("revokeChatInviteLink", $args));
    }

    public static function approveChatJoinRequest(array $args = []): Response
    {
        return new Response(HttpClient::request("approveChatJoinRequest", $args));
    }

    public static function declineChatJoinRequest(array $args = []): Response
    {
        return new Response(HttpClient::request("declineChatJoinRequest", $args));
    }

    public static function setChatPhoto(array $args = []): Response
    {
        return new Response(HttpClient::request("setChatPhoto", $args));
    }

    public static function deleteChatPhoto(array $args = []): Response
    {
        return new Response(HttpClient::request("deleteChatPhoto", $args));
    }

    public static function setChatTitle(array $args = []): Response
    {
        return new Response(HttpClient::request("setChatTitle", $args));
    }

    public static function setChatDescription(array $args = []): Response
    {
        return new Response(HttpClient::request("setChatDescription", $args));
    }

    public static function pinChatMessage(array $args = []): Response
    {
        return new Response(HttpClient::request("pinChatMessage", $args));
    }

    public static function unpinChatMessage(array $args = []): Response
    {
        return new Response(HttpClient::request("unpinChatMessage", $args));
    }

    public static function unpinAllChatMessages(array $args = []): Response
    {
        return new Response(HttpClient::request("unpinAllChatMessages", $args));
    }

    public static function leaveChat(array $args = []): Response
    {
        return new Response(HttpClient::request("leaveChat", $args));
    }

    public static function getChat(array $args = []): Response
    {
        return new Response(HttpClient::request("getChat", $args));
    }

    public static function getChatAdministrators(array $args = []): Response
    {
        return new Response(HttpClient::request("getChatAdministrators", $args));
    }

    public static function getChatMemberCount(array $args = []): Response
    {
        return new Response(HttpClient::request("getChatMemberCount", $args));
    }

    public static function getChatMember(array $args = []): Response
    {
        return new Response(HttpClient::request("getChatMember", $args));
    }

    public static function setChatStickerSet(array $args = []): Response
    {
        return new Response(HttpClient::request("setChatStickerSet", $args));
    }

    public static function deleteChatStickerSet(array $args = []): Response
    {
        return new Response(HttpClient::request("deleteChatStickerSet", $args));
    }

    public static function getForumTopicIconStickers(array $args = []): Response
    {
        return new Response(HttpClient::request("getForumTopicIconStickers", $args));
    }

    public static function createForumTopic(array $args = []): Response
    {
        return new Response(HttpClient::request("createForumTopic", $args));
    }

    public static function editForumTopic(array $args = []): Response
    {
        return new Response(HttpClient::request("editForumTopic", $args));
    }

    public static function closeForumTopic(array $args = []): Response
    {
        return new Response(HttpClient::request("closeForumTopic", $args));
    }

    public static function reopenForumTopic(array $args = []): Response
    {
        return new Response(HttpClient::request("reopenForumTopic", $args));
    }

    public static function deleteForumTopic(array $args = []): Response
    {
        return new Response(HttpClient::request("deleteForumTopic", $args));
    }

    public static function unpinAllForumTopicMessages(array $args = []): Response
    {
        return new Response(HttpClient::request("unpinAllForumTopicMessages", $args));
    }

    public static function editGeneralForumTopic(array $args = []): Response
    {
        return new Response(HttpClient::request("editGeneralForumTopic", $args));
    }

    public static function closeGeneralForumTopic(array $args = []): Response
    {
        return new Response(HttpClient::request("closeGeneralForumTopic", $args));
    }

    public static function reopenGeneralForumTopic(array $args = []): Response
    {
        return new Response(HttpClient::request("reopenGeneralForumTopic", $args));
    }

    public static function hideGeneralForumTopic(array $args = []): Response
    {
        return new Response(HttpClient::request("hideGeneralForumTopic", $args));
    }

    public static function unhideGeneralForumTopic(array $args = []): Response
    {
        return new Response(HttpClient::request("unhideGeneralForumTopic", $args));
    }

    public static function unpinAllGeneralForumTopicMessages(array $args = []): Response
    {
        return new Response(HttpClient::request("unpinAllGeneralForumTopicMessages", $args));
    }

    public static function answerCallbackQuery(array $args = []): Response
    {
        return new Response(HttpClient::request("answerCallbackQuery", $args));
    }

    public static function getUserChatBoosts(array $args = []): Response
    {
        return new Response(HttpClient::request("getUserChatBoosts", $args));
    }

    public static function getBusinessConnection(array $args = []): Response
    {
        return new Response(HttpClient::request("getBusinessConnection", $args));
    }

    public static function setMyCommands(array $args = []): Response
    {
        return new Response(HttpClient::request("setMyCommands", $args));
    }

    public static function deleteMyCommands(array $args = []): Response
    {
        return new Response(HttpClient::request("deleteMyCommands", $args));
    }

    public static function getMyCommands(array $args = []): Response
    {
        return new Response(HttpClient::request("getMyCommands", $args));
    }

    public static function setMyName(array $args = []): Response
    {
        return new Response(HttpClient::request("setMyName", $args));
    }

    public static function getMyName(array $args = []): Response
    {
        return new Response(HttpClient::request("getMyName", $args));
    }

    public static function setMyDescription(array $args = []): Response
    {
        return new Response(HttpClient::request("setMyDescription", $args));
    }

    public static function getMyDescription(array $args = []): Response
    {
        return new Response(HttpClient::request("getMyDescription", $args));
    }

    public static function setMyShortDescription(array $args = []): Response
    {
        return new Response(HttpClient::request("setMyShortDescription", $args));
    }

    public static function getMyShortDescription(array $args = []): Response
    {
        return new Response(HttpClient::request("getMyShortDescription", $args));
    }

    public static function setChatMenuButton(array $args = []): Response
    {
        return new Response(HttpClient::request("setChatMenuButton", $args));
    }

    public static function getChatMenuButton(array $args = []): Response
    {
        return new Response(HttpClient::request("getChatMenuButton", $args));
    }

    public static function setMyDefaultAdministratorRights(array $args = []): Response
    {
        return new Response(HttpClient::request("setMyDefaultAdministratorRights", $args));
    }

    public static function getMyDefaultAdministratorRights(array $args = []): Response
    {
        return new Response(HttpClient::request("getMyDefaultAdministratorRights", $args));
    }

    public static function editMessageText(array $args = []): Response
    {
        return new Response(HttpClient::request("editMessageText", $args));
    }

    public static function editMessageCaption(array $args = []): Response
    {
        return new Response(HttpClient::request("editMessageCaption", $args));
    }

    public static function editMessageMedia(array $args = []): Response
    {
        return new Response(HttpClient::request("editMessageMedia", $args));
    }

    public static function editMessageLiveLocation(array $args = []): Response
    {
        return new Response(HttpClient::request("editMessageLiveLocation", $args));
    }

    public static function editMessageReplyMarkup(array $args = []): Response
    {
        return new Response(HttpClient::request("editMessageReplyMarkup", $args));
    }

    public static function stopPoll(array $args = []): Response
    {
        return new Response(HttpClient::request("stopPoll", $args));
    }

    public static function deleteMessage(array $args = []): Response
    {
        return new Response(HttpClient::request("deleteMessage", $args));
    }

    public static function deleteMessages(array $args = []): Response
    {
        return new Response(HttpClient::request("deleteMessages", $args));
    }

    public static function sendSticker(array $args = []): Response
    {
        return new Response(HttpClient::request("sendSticker", $args));
    }

    public static function getStickerSet(array $args = []): Response
    {
        return new Response(HttpClient::request("getStickerSet", $args));
    }

    public static function getCustomEmojiStickers(array $args = []): Response
    {
        return new Response(HttpClient::request("getCustomEmojiStickers", $args));
    }

    public static function uploadStickerFile(array $args = []): Response
    {
        return new Response(HttpClient::request("uploadStickerFile", $args));
    }

    public static function createNewStickerSet(array $args = []): Response
    {
        return new Response(HttpClient::request("createNewStickerSet", $args));
    }

    public static function addStickerToSet(array $args = []): Response
    {
        return new Response(HttpClient::request("addStickerToSet", $args));
    }

    public static function setStickerPositionInSet(array $args = []): Response
    {
        return new Response(HttpClient::request("setStickerPositionInSet", $args));
    }

    public static function deleteStickerFromSet(array $args = []): Response
    {
        return new Response(HttpClient::request("deleteStickerFromSet", $args));
    }

    public static function replaceStickerInSet(array $args = []): Response
    {
        return new Response(HttpClient::request("replaceStickerInSet", $args));
    }

    public static function setStickerEmojiList(array $args = []): Response
    {
        return new Response(HttpClient::request("setStickerEmojiList", $args));
    }

    public static function setStickerKeywords(array $args = []): Response
    {
        return new Response(HttpClient::request("setStickerKeywords", $args));
    }

    public static function setStickerMaskPosition(array $args = []): Response
    {
        return new Response(HttpClient::request("setStickerMaskPosition", $args));
    }

    public static function setStickerSetTitle(array $args = []): Response
    {
        return new Response(HttpClient::request("setStickerSetTitle", $args));
    }

    public static function setStickerSetThumbnail(array $args = []): Response
    {
        return new Response(HttpClient::request("setStickerSetThumbnail", $args));
    }

    public static function setCustomEmojiStickerSetThumbnail(array $args = []): Response
    {
        return new Response(HttpClient::request("setCustomEmojiStickerSetThumbnail", $args));
    }

    public static function deleteStickerSet(array $args = []): Response
    {
        return new Response(HttpClient::request("deleteStickerSet", $args));
    }

    public static function getAvailableGifts(array $args = []): Response
    {
        return new Response(HttpClient::request("getAvailableGifts", $args));
    }

    public static function sendGift(array $args = []): Response
    {
        return new Response(HttpClient::request("sendGift", $args));
    }

    public static function verifyUser(array $args = []): Response
    {
        return new Response(HttpClient::request("verifyUser", $args));
    }

    public static function verifyChat(array $args = []): Response
    {
        return new Response(HttpClient::request("verifyChat", $args));
    }

    public static function removeUserVerification(array $args = []): Response
    {
        return new Response(HttpClient::request("removeUserVerification", $args));
    }

    public static function removeChatVerification(array $args = []): Response
    {
        return new Response(HttpClient::request("removeChatVerification", $args));
    }

    public static function answerWebAppQuery(array $args = []): Response
    {
        return new Response(HttpClient::request("answerWebAppQuery", $args));
    }

    public static function SentWebAppMessage(array $args = []): Response
    {
        return new Response(HttpClient::request("SentWebAppMessage", $args));
    }

    public static function savePreparedInlineMessage(array $args = []): Response
    {
        return new Response(HttpClient::request("savePreparedInlineMessage", $args));
    }

    public static function PreparedInlineMessage(array $args = []): Response
    {
        return new Response(HttpClient::request("PreparedInlineMessage", $args));
    }

    public static function sendInvoice(array $args = []): Response
    {
        return new Response(HttpClient::request("sendInvoice", $args));
    }

    public static function createInvoiceLink(array $args = []): Response
    {
        return new Response(HttpClient::request("createInvoiceLink", $args));
    }

    public static function answerShippingQuery(array $args = []): Response
    {
        return new Response(HttpClient::request("answerShippingQuery", $args));
    }

    public static function answerPreCheckoutQuery(array $args = []): Response
    {
        return new Response(HttpClient::request("answerPreCheckoutQuery", $args));
    }

    public static function getStarTransactions(array $args = []): Response
    {
        return new Response(HttpClient::request("getStarTransactions", $args));
    }

    public static function refundStarPayment(array $args = []): Response
    {
        return new Response(HttpClient::request("refundStarPayment", $args));
    }

    public static function editUserStarSubscription(array $args = []): Response
    {
        return new Response(HttpClient::request("editUserStarSubscription", $args));
    }

    public static function setPassportDataErrors(array $args = []): Response
    {
        return new Response(HttpClient::request("setPassportDataErrors", $args));
    }

    public static function sendGame(array $args = []): Response
    {
        return new Response(HttpClient::request("sendGame", $args));
    }

    public static function setGameScore(array $args = []): Response
    {
        return new Response(HttpClient::request("setGameScore", $args));
    }

    public static function getGameHighScores(array $args = []): Response
    {
        return new Response(HttpClient::request("getGameHighScores", $args));
    }

    public static function __callStatic(string $method, array $args = []): Response
    {
        return new Response(HttpClient::request($method, $args[0] ?? []));
    }
}
