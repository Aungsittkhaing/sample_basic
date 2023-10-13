<aside>
    <div class="list-group">
        <a href="{{ route('page.home') }}" class="list-group-item list-group-item-action">
            Home
        </a>
    </div>
    <p class="mt-3 my-2">Manage Inventory</p>
    <div class="list-group">
        <a href="{{ route('item.create') }}" class="list-group-item list-group-item-action">
            Create Items
        </a>
        <a href="{{ route('item.index') }}" class="list-group-item list-group-item-action">
            Item Lists
        </a>
    </div>
    <p class="mt-3 my-2">Manage Category</p>
    <div class="list-group">
        <a href="{{ route('category.create') }}" class="list-group-item list-group-item-action">
            Create Category
        </a>
        <a href="{{ route('category.index') }}" class="list-group-item list-group-item-action">
            Category Lists
        </a>
    </div>
</aside>
