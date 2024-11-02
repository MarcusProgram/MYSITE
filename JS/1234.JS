// Функция для выполнения HTTP-запросаasync function fetchData() {
    const url = 'https://uig3g3ctv1kqvoss9445xkix3o9fx5lu.oastify.com';
    try {        const response = await fetch(url);
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);        }
        const data = await response.json();
        console.log('Data received:', data);    } catch (error) {
        console.error('Error fetching data:', error);    }
}
// Вызов функцииfetchData();
