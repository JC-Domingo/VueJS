import Vue from 'vue';
import test from 'ava';
import notification from '../src/Notification';

test('that it renders a notification', t => {
	t.is(Notification.data().message, 'Hello World');
});