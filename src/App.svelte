<script>
	import DatePicker from "./DatePicker.svelte";
	let currentDate = new Date((new Date()).valueOf() + 86400000)
	const onDateChange = d => {
		currentDate = d.detail
		console.log(currentDate)
	}
</script>
<DatePicker
on:datechange={onDateChange}
selected={currentDate}
isAllowed={date => {
	const millisecs = date.getTime();
	if (millisecs + 25 * 3600 * 1000 < Date.now()) return false
	if (millisecs > Date.now() + 3600 * 24 * 45 * 1000) return false
	return true
}} />