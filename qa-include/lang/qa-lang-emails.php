<?php
/*
	Question2Answer by Gideon Greenspan and contributors
	http://www.question2answer.org/

	File: qa-include/qa-lang-emails.php
	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'a_commented_body' => "^site_title 당신의 답변에^c_handle님이 댓글을 달았습니다.\n\n^open^c_content^close\n\n당신의 답변 :\n\n^open^c_context^close\n\n코멘트하려면 아래를 클릭:\n\n^url\n\n^site_title",
		'a_commented_subject' => '【^site_title】답변에 댓글이 달리면되었습니다.。',

		'a_followed_body' => "^site_title 당신의 답변에^q_handle님이 관련 질문이 게시했습니다.\n\n^open^q_title^close\n\n당신의 답변 :\n\n^open^a_content^close\n\n질문에 답변하는 경우는 아래를 클릭:\n\n^url\n\n^site_title",
		'a_followed_subject' => '【^site_title】관련 질문이 게시되었습니다。',

		'a_selected_body' => "축하합니다！^site_title 아래의 답변^s_handle이 베스트 답변으로 선택되었습니다.\n\n^open^a_content^close\n\n질문:\n\n^open^q_title^close\n\n당신의 답변은 아래를 클릭:\n\n^url\n\n^site_title",
		'a_selected_subject' => '【^site_title】답변이 우수 답변에 선정되었습니다!',

		'c_commented_body' => "^site_title 당신의 코멘트 후^c_handle님으로부터 코멘트가 추가되었습니다.\n\n^open^c_content^close\n\n코멘트 상대의 발언 :\n\n^open^c_context^close\n\n코멘트하려면 아래를 클릭:\n\n^url\n\n^site_title",
		'c_commented_subject' => '【^site_title】코멘트가 추가되었습니다。',

		'confirm_body' => "아래 링크를 클릭하여^site_title당신의 이메일 주소를 인증하십시오.\n\n^url\n\n^site_title",
		'confirm_subject' => '【^site_title】이메일 주소 확인',

		'feedback_body' => "コメント:\n^message\n\n名前:\n^name\n\n이메일 주소 :\n^email\n\n이전 페이지 :\n^previous\n\n사용자 :\n^url\n\nIP 주소 :\n^ip\n\n브라우저 :\n^browser",
		'feedback_subject' => '【^】문의',

		'flagged_body' => "^p_handle 님의 게시물에 ^flags 이있었습니다.\n\n^open^p_context^close\n\n게시물은 아래를 클릭 :\n\n^url\n\n\n통보 된 모든 게시물는 아래를 클릭 :\n\n^a_url^site_title",
		'flagged_subject' => '【^site_title】통보가있었습니다.',

		'moderate_body' => "^p_handle 님의 기사를 승인하십시오.\n\n^open^p_context^close\n\n게시물의 승인 / 거부는 아래를 클릭 :\n\n^url\n\n\n승인 대기 게시물 목록은 아래를 클릭:\n\n^a_url\n\n^site_title",
		'moderate_subject' => '【^site_title】게시물을 승인하십시오.',

		'new_password_body' => "^site_title 당신의 새 비밀번호를 알려드립니다。\n\n비밀번호: ^password\n\n로그인 후 즉시 암호를 변경하는 것이 좋습니다.\n\n^site_title\n^url",
		'new_password_subject' => '【^site_title】비밀번호 변경 안내',

		'private_message_body' => "^site_titleの^f_handle님에게 비공개 메시지를 받았습니다.\n\n^open^message^close\n\n^more\n\n^site_title\n\n내 계정에 비공개 메시지를 차단할 수 있습니다.\n^a_url",
		'private_message_info' => "^f_handle님의 정보\n\n^url\n\n",
		'private_message_reply' => "^f_handle님에 대한 회신은 아래를 클릭\n\n^url",
		'private_message_subject' => '【^site_title】^f_handle님에게 비공개 메시지를 수신',

		'q_answered_body' => "^site_title 당신의 질문에^a_handle님 답변이 게시되었습니다.\n\n^open^a_content^close\n\n당신의 질문:\n\n^open^q_title^close\n\n답변은 아래를 클릭 :\n\n^url\n\n^site_title",
		'q_answered_subject' => '【^site_title】질문에 대한 답변이 게시되었습니다。',

		'q_commented_body' => "^site_title 당신의 질문에^c_handle님 댓글을 달았습니다.\n\n^open^c_content^close\n\n당신의 질문:\n\n^open^c_context^close\n\n코멘트하려면 아래를 클릭:\n\n^url\n\n^site_title",
		'q_commented_subject' => '【^site_title】질문에 댓글이 달렸습니다',

		'q_posted_body' => "^site_title 에^q_handle님 질문이 게시되었습니다.\n\n^open^q_title\n\n^q_content^close\n\n질문은 아래를 클릭 :\n\n^url\n\n^site_title",
		'q_posted_subject' => '【^site_title】질문 게시되었습니다.',

		'remoderate_body' => "^p_handle님이 편집한 게시물을 승인하십시오:\n\n^open^p_context^close\n\n편집된 게시물의 승인／숨기기은 아래를 클릭:\n\n^url\n\n승인 대기 게시물은 아래를 클릭:\n\n^a_url\n\n\n^site_title",
		'remoderate_subject' => '【^site_title】승인알림',
		
		'reset_body' => "^site_title 당신의 비밀번호를 재설정하려면 아래를 클릭:\n\n^url\n\n또는 페이지의 필드에 아래의 코드를 입력:\n\n코드: ^code\n\n암호를 재설정하지 않으면이 메일은 무시하십시오.\n\n^site_title",
		'reset_subject' => '【^site_title】암호 재설정 안내',

		'to_handle_prefix' => "^ 님\n\n",

		'u_registered_body' => "^u_handle님 새로운 사용자로 등록되었습니다.\n\n프로필은 아래를 클릭:\n\n^url\n\n^site_title",
		'u_to_approve_body' => "^u_handle님 새로운 사용자로 등록되었습니다.\n\n사용자의 승인 아래를 클릭:\n\n^url\n\n승인 대기중인 사용자는 아래를 클릭:\n\n^a_url\n\n^site_title",
		'u_registered_subject' => '【^site_title】새로운 사용자가 등록되었습니다.',
		
		'u_approved_body' => "프로필은 아래를 클릭:\n\n^url\n\n^site_title",
		'u_approved_subject' => '【^site_title】당신의 계정이 승인되었습니다。',
		
		'wall_post_subject' => '【^site_title】공개 메시지',
		'wall_post_body' => "^f_handle님이 ^site_title당신의 공개 메시지를 게시했습니다.\n\n^open^post^close\n\n대답은 여기:\n\n^url\n\n^site_title",

		'welcome_body' => "^site_title 사용자 등록 감사합니다.\n\n^custom^confirm로그인 정보:\n\n사용자 이름: ^handle\n\n이메일 주소: ^email\n나중에 참조 할 수 있도록이 정보를 잘 보관하십시오.\n\n^site_title\n^url",
		'welcome_confirm' => "아래 링크를 클릭하여 귀하의 이메일 주소를 인증하십시오。\n\n^url\n\n",
		'welcome_subject' => '【^site_title】등록 알림',
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/