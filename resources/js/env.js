export default {
  WELCOME_MESSAGE_LIMIT: process.env.MIX_WELCOME_MESSAGE_LIMIT || 500,
  REFRESH_RATE: process.env.MIX_REFRESH_RATE || 30,
  HTTP_UNAUTHORIZED: 401,
  HTTP_FORBIDDEN: 403,
  HTTP_NOT_FOUND: 404,
  HTTP_GONE: 410,
  HTTP_PAYLOAD_TOO_LARGE: 413,
  HTTP_GUESTS_ONLY: 420,
  HTTP_UNPROCESSABLE_ENTITY: 422,
  HTTP_MEETING_NOT_RUNNING: 460,
  HTTP_NO_SERVER_AVAILABLE: 461,
  HTTP_ROOM_START_FAILED: 462,
  HTTP_ROOM_LIMIT_EXCEEDED: 463,
  HTTP_ROLE_DELETE_LINKED_USERS: 464,
  HTTP_ROLE_UPDATE_PERMISSION_LOST: 465,
  HTTP_STALE_MODEL: 428,
  HTTP_LOCKED: 423
};
