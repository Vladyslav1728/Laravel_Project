<h2>Zadaj číslo n</h2>

<form method="POST" action="/new/result">
    @csrf
    <input type="number" name="n" required>
    <button type="submit">Odoslať</button>
</form>
