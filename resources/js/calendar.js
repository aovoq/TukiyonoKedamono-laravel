// import '@fullcalendar/core/vdom'
import { Calendar } from '@fullcalendar/core'
import interationPlugin from '@fullcalendar/interaction'
import dayGridPlugin from '@fullcalendar/daygrid'

const calendarEl = document.getElementById('calendar')
const csrf_token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')

const calendar = new Calendar(calendarEl, {
    plugins: [interationPlugin, dayGridPlugin],
    initialView: 'dayGridMonth',
    headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: '',
    },
    locale: 'ja',

    events: function (info, successCallback, failureCallback) {
        fetch('/schedule-get', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrf_token,
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `start_date=${info.start.valueOf()}&end_date=${info.end.valueOf()}`
        })
        .then(res => res.json())
        .then((data) => {
            // console.log(res.json())
            calendar.removeAllEvents()
            successCallback(data)
        })
        .catch(error => {
            console.log(error)
            alert('イベントの取得に失敗しました。')
        })
    },

    selectable: true,
    select: function (info) {
        const eventName = prompt('イベントを入力してください')

        if (eventName) {
            const formData = new FormData()
            formData.append('start_date', info.start.valueOf())
            formData.append('end_date', info.end.valueOf())
            formData.append('event_name', eventName)
            fetch('/schedule-add', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrf_token,
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `start_date=${info.start.valueOf()}&end_date=${info.end.valueOf()}&event_name=${eventName}`
            }).then((res) => {
                calendar.addEvent({
                    title: eventName,
                    start: info.start,
                    end: info.end,
                    allDay: true,
                })
            })
            .catch((error) => {
                console.log(error)
                alert('登録に失敗しました。')
            })
        }
    }
})
calendar.render()
