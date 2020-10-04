<script>
	import DatePicker from "./DatePicker.svelte";
	let currentDate = new Date((new Date()).valueOf() + 86400000)
	$: data = fetchDate(currentDate)
	async function fetchDate(item) {
		const response = await self.fetch("/api?day="+ item.valueOf())
		if (response.ok) {
			return response.json()
		} else {
			throw new Error(response)
		}
	}
	const onDateChange = d => {
		currentDate = d.detail
		data = fetchDate(currentDate)
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

{#await data}
<p>Aikoja ladataan</p>
{:then users}
<div class="times">
	{#each data as item}
	<button name="time" value={item[1]}>{item[0]}</button>
	{/each}
</div>
{:catch error}
	<p style="color: red">{error.message}</p>
{/await}