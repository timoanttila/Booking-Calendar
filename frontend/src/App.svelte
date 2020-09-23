<script>
	import Calendar from './components/Calendar.svelte';
	
	const today = new Date;
</script>

<Calendar {today} year={2020} />