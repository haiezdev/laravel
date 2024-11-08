<div
    style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9;">
    <h2 style="text-align: center; color: #333;">Thêm Danh Mục</h2>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div style="margin-bottom: 15px;">
            <label for="name" style="display: block; margin-bottom: 5px; font-weight: bold;">Tên Danh Mục:</label>
            <input type="text" name="name" id="name" required
                style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="description" style="display: block; margin-bottom: 5px; font-weight: bold;">Mô Tả:</label>
            <textarea name="description" id="description"
                style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;"></textarea>
        </div>
        <button type="submit"
            style="padding: 10px 15px; border: none; border-radius: 4px; background-color: #28a745; color: white; font-weight: bold; cursor: pointer;">
            Thêm
        </button>
    </form>
</div>