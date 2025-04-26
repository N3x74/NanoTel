<?php

namespace NanoTel\Request;

use NanoTel\Http\HttpClient;
use NanoTel\Request\RequestInterface;
use NanoTel\Request\Response;

class Request implements RequestInterface
{
    public static function getUpdates(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("getUpdates", $args));
    }

    public static function setWebhook(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setWebhook", $args));
    }

    public static function deleteWebhook(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("deleteWebhook", $args));
    }

    public static function WebhookInfo(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("WebhookInfo", $args));
    }

    public static function getMe(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("getMe", $args));
    }

    public static function logOut(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("logOut", $args));
    }

    public static function close(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("close", $args));
    }

    public static function sendMessage(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        
        return new Response(HttpClient::request("sendMessage", $args));
    }
    

    public static function forwardMessage(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("forwardMessage", $args));
    }

    public static function forwardMessages(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("forwardMessages", $args));
    }

    public static function copyMessage(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("copyMessage", $args));
    }

    public static function copyMessages(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("copyMessages", $args));
    }

    public static function sendPhoto(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("sendPhoto", $args));
    }

    public static function sendAudio(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("sendAudio", $args));
    }

    public static function sendDocument(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("sendDocument", $args));
    }

    public static function sendVideo(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("sendVideo", $args));
    }

    public static function sendAnimation(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("sendAnimation", $args));
    }

    public static function sendVoice(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("sendVoice", $args));
    }

    public static function sendVideoNote(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("sendVideoNote", $args));
    }

    public static function sendPaidMedia(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("sendPaidMedia", $args));
    }

    public static function sendMediaGroup(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("sendMediaGroup", $args));
    }

    public static function sendLocation(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("sendLocation", $args));
    }

    public static function sendVenue(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("sendVenue", $args));
    }

    public static function sendContact(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("sendContact", $args));
    }

    public static function sendPoll(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("sendPoll", $args));
    }

    public static function sendDice(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("sendDice", $args));
    }

    public static function sendChatAction(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("sendChatAction", $args));
    }

    public static function setMessageReaction(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setMessageReaction", $args));
    }

    public static function getUserProfilePhotos(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("getUserProfilePhotos", $args));
    }

    public static function setUserEmojiStatus(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setUserEmojiStatus", $args));
    }

    public static function getFile(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("getFile", $args));
    }

    public static function banChatMember(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("banChatMember", $args));
    }

    public static function unbanChatMember(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("unbanChatMember", $args));
    }

    public static function restrictChatMember(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("restrictChatMember", $args));
    }

    public static function promoteChatMember(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("promoteChatMember", $args));
    }

    public static function setChatAdministratorCustomTitle(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setChatAdministratorCustomTitle", $args));
    }

    public static function banChatSenderChat(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("banChatSenderChat", $args));
    }

    public static function unbanChatSenderChat(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("unbanChatSenderChat", $args));
    }

    public static function setChatPermissions(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setChatPermissions", $args));
    }

    public static function exportChatInviteLink(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("exportChatInviteLink", $args));
    }

    public static function createChatInviteLink(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("createChatInviteLink", $args));
    }

    public static function editChatInviteLink(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("editChatInviteLink", $args));
    }

    public static function createChatSubscriptionInviteLink(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("createChatSubscriptionInviteLink", $args));
    }

    public static function editChatSubscriptionInviteLink(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("editChatSubscriptionInviteLink", $args));
    }

    public static function revokeChatInviteLink(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("revokeChatInviteLink", $args));
    }

    public static function approveChatJoinRequest(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("approveChatJoinRequest", $args));
    }

    public static function declineChatJoinRequest(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("declineChatJoinRequest", $args));
    }

    public static function setChatPhoto(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setChatPhoto", $args));
    }

    public static function deleteChatPhoto(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("deleteChatPhoto", $args));
    }

    public static function setChatTitle(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setChatTitle", $args));
    }

    public static function setChatDescription(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setChatDescription", $args));
    }

    public static function pinChatMessage(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("pinChatMessage", $args));
    }

    public static function unpinChatMessage(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("unpinChatMessage", $args));
    }

    public static function unpinAllChatMessages(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("unpinAllChatMessages", $args));
    }

    public static function leaveChat(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("leaveChat", $args));
    }

    public static function getChat(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("getChat", $args));
    }

    public static function getChatAdministrators(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("getChatAdministrators", $args));
    }

    public static function getChatMemberCount(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("getChatMemberCount", $args));
    }

    public static function getChatMember(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("getChatMember", $args));
    }

    public static function setChatStickerSet(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setChatStickerSet", $args));
    }

    public static function deleteChatStickerSet(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("deleteChatStickerSet", $args));
    }

    public static function getForumTopicIconStickers(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("getForumTopicIconStickers", $args));
    }

    public static function createForumTopic(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("createForumTopic", $args));
    }

    public static function editForumTopic(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("editForumTopic", $args));
    }

    public static function closeForumTopic(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("closeForumTopic", $args));
    }

    public static function reopenForumTopic(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("reopenForumTopic", $args));
    }

    public static function deleteForumTopic(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("deleteForumTopic", $args));
    }

    public static function unpinAllForumTopicMessages(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("unpinAllForumTopicMessages", $args));
    }

    public static function editGeneralForumTopic(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("editGeneralForumTopic", $args));
    }

    public static function closeGeneralForumTopic(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("closeGeneralForumTopic", $args));
    }

    public static function reopenGeneralForumTopic(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("reopenGeneralForumTopic", $args));
    }

    public static function hideGeneralForumTopic(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("hideGeneralForumTopic", $args));
    }

    public static function unhideGeneralForumTopic(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("unhideGeneralForumTopic", $args));
    }

    public static function unpinAllGeneralForumTopicMessages(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("unpinAllGeneralForumTopicMessages", $args));
    }

    public static function answerCallbackQuery(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("answerCallbackQuery", $args));
    }

    public static function getUserChatBoosts(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("getUserChatBoosts", $args));
    }

    public static function getBusinessConnection(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("getBusinessConnection", $args));
    }

    public static function setMyCommands(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setMyCommands", $args));
    }

    public static function deleteMyCommands(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("deleteMyCommands", $args));
    }

    public static function getMyCommands(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("getMyCommands", $args));
    }

    public static function setMyName(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setMyName", $args));
    }

    public static function getMyName(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("getMyName", $args));
    }

    public static function setMyDescription(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setMyDescription", $args));
    }

    public static function getMyDescription(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("getMyDescription", $args));
    }

    public static function setMyShortDescription(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setMyShortDescription", $args));
    }

    public static function getMyShortDescription(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("getMyShortDescription", $args));
    }

    public static function setChatMenuButton(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setChatMenuButton", $args));
    }

    public static function getChatMenuButton(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("getChatMenuButton", $args));
    }

    public static function setMyDefaultAdministratorRights(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setMyDefaultAdministratorRights", $args));
    }

    public static function getMyDefaultAdministratorRights(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("getMyDefaultAdministratorRights", $args));
    }

    public static function editMessageText(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("editMessageText", $args));
    }

    public static function editMessageCaption(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("editMessageCaption", $args));
    }

    public static function editMessageMedia(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("editMessageMedia", $args));
    }

    public static function editMessageLiveLocation(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("editMessageLiveLocation", $args));
    }

    public static function editMessageReplyMarkup(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("editMessageReplyMarkup", $args));
    }

    public static function stopPoll(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("stopPoll", $args));
    }

    public static function deleteMessage(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("deleteMessage", $args));
    }

    public static function deleteMessages(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("deleteMessages", $args));
    }

    public static function sendSticker(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("sendSticker", $args));
    }

    public static function getStickerSet(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("getStickerSet", $args));
    }

    public static function getCustomEmojiStickers(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("getCustomEmojiStickers", $args));
    }

    public static function uploadStickerFile(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("uploadStickerFile", $args));
    }

    public static function createNewStickerSet(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("createNewStickerSet", $args));
    }

    public static function addStickerToSet(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("addStickerToSet", $args));
    }

    public static function setStickerPositionInSet(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setStickerPositionInSet", $args));
    }

    public static function deleteStickerFromSet(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("deleteStickerFromSet", $args));
    }

    public static function replaceStickerInSet(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("replaceStickerInSet", $args));
    }

    public static function setStickerEmojiList(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setStickerEmojiList", $args));
    }

    public static function setStickerKeywords(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setStickerKeywords", $args));
    }

    public static function setStickerMaskPosition(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setStickerMaskPosition", $args));
    }

    public static function setStickerSetTitle(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setStickerSetTitle", $args));
    }

    public static function setStickerSetThumbnail(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setStickerSetThumbnail", $args));
    }

    public static function setCustomEmojiStickerSetThumbnail(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setCustomEmojiStickerSetThumbnail", $args));
    }

    public static function deleteStickerSet(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("deleteStickerSet", $args));
    }

    public static function getAvailableGifts(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("getAvailableGifts", $args));
    }

    public static function sendGift(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("sendGift", $args));
    }

    public static function verifyUser(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("verifyUser", $args));
    }

    public static function verifyChat(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("verifyChat", $args));
    }

    public static function removeUserVerification(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("removeUserVerification", $args));
    }

    public static function removeChatVerification(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("removeChatVerification", $args));
    }

    public static function answerWebAppQuery(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("answerWebAppQuery", $args));
    }

    public static function SentWebAppMessage(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("SentWebAppMessage", $args));
    }

    public static function savePreparedInlineMessage(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("savePreparedInlineMessage", $args));
    }

    public static function PreparedInlineMessage(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("PreparedInlineMessage", $args));
    }

    public static function sendInvoice(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("sendInvoice", $args));
    }

    public static function createInvoiceLink(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("createInvoiceLink", $args));
    }

    public static function answerShippingQuery(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("answerShippingQuery", $args));
    }

    public static function answerPreCheckoutQuery(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("answerPreCheckoutQuery", $args));
    }

    public static function getStarTransactions(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("getStarTransactions", $args));
    }

    public static function refundStarPayment(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("refundStarPayment", $args));
    }

    public static function editUserStarSubscription(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("editUserStarSubscription", $args));
    }

    public static function setPassportDataErrors(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setPassportDataErrors", $args));
    }

    public static function sendGame(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("sendGame", $args));
    }

    public static function setGameScore(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("setGameScore", $args));
    }

    public static function getGameHighScores(...$args): Response
    {
        if (count($args) === 1 && is_array($args[0])) {
            $args = $args[0];
        }
        return new Response(HttpClient::request("getGameHighScores", $args));
    }

    public static function __callStatic(string $method, array $args = []): Response
    {
        return new Response(HttpClient::request($method, $args[0] ?? []));
    }
}
