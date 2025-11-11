<?php
// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace { 
  class Eloquent extends \Hyperf\DbConnection\Model\Model { 
    /**
     * Clone the Model query builder.
     *
     * @return static
     * @static
     */
    public static function clone(){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->clone(); 
     } 
    /**
     * Create and return an un-saved model instance.
     *
     * @return \Hyperf\Database\Model\TModel
     * @static
     */
    public static function make($attributes = []){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->make($attributes); 
     } 
    /**
     * Register a new global scope.
     *
     * @param string $identifier
     * @param \Closure|\Hyperf\Database\Model\Scope $scope
     * @return \Hyperf\Database\Model\Builder
     * @static
     */
    public static function withGlobalScope($identifier, $scope){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->withGlobalScope($identifier, $scope); 
     } 
    /**
     * Remove a registered global scope.
     *
     * @param \Hyperf\Database\Model\Scope|string $scope
     * @return \Hyperf\Database\Model\Builder
     * @static
     */
    public static function withoutGlobalScope($scope){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->withoutGlobalScope($scope); 
     } 
    /**
     * Remove all or passed registered global scopes.
     *
     * @return \Hyperf\Database\Model\Builder
     * @static
     */
    public static function withoutGlobalScopes($scopes = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->withoutGlobalScopes($scopes); 
     } 
    /**
     * Get an array of global scopes that were removed from the query.
     *
     * @return array
     * @static
     */
    public static function removedScopes(){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->removedScopes(); 
     } 
    /**
     * Add a where clause on the primary key to the query.
     *
     * @param mixed $id
     * @return \Hyperf\Database\Model\Builder
     * @static
     */
    public static function whereKey($id){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->whereKey($id); 
     } 
    /**
     * Add a where clause on the primary key to the query.
     *
     * @param mixed $id
     * @return \Hyperf\Database\Model\Builder
     * @static
     */
    public static function whereKeyNot($id){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->whereKeyNot($id); 
     } 
    /**
     * Exclude the given models from the query results.
     *
     * @static
     */
    public static function except($models){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->except($models); 
     } 
    /**
     * Add a basic where clause to the query.
     *
     * @param array|\Closure|string $column
     * @param string $boolean
     * @param null|mixed $operator
     * @param null|mixed $value
     * @return \Hyperf\Database\Model\Builder
     * @static
     */
    public static function where($column, $operator = null, $value = null, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->where($column, $operator, $value, $boolean); 
     } 
    /**
     * Add an "or where" clause to the query.
     *
     * @param array|\Closure|string $column
     * @param null|mixed $operator
     * @param null|mixed $value
     * @return \Hyperf\Database\Model\Builder
     * @static
     */
    public static function orWhere($column, $operator = null, $value = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->orWhere($column, $operator, $value); 
     } 
    /**
     * Add an "order by" clause for a timestamp to the query.
     *
     * @param string $column
     * @return \Hyperf\Database\Model\Builder
     * @static
     */
    public static function latest($column = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->latest($column); 
     } 
    /**
     * Add an "order by" clause for a timestamp to the query.
     *
     * @param string $column
     * @return \Hyperf\Database\Model\Builder
     * @static
     */
    public static function oldest($column = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->oldest($column); 
     } 
    /**
     * Create a collection of models from plain arrays.
     *
     * @return ModelCollection<int, TModel>
     * @static
     */
    public static function hydrate($items){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->hydrate($items); 
     } 
    /**
     * Create a collection of models from a raw query.
     *
     * @param string $query
     * @param array $bindings
     * @return ModelCollection<int, TModel>
     * @static
     */
    public static function fromQuery($query, $bindings = []){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->fromQuery($query, $bindings); 
     } 
    /**
     * Find a model by its primary key.
     *
     * @param mixed $id
     * @param array $columns
     * @return ($id is array ? ModelCollection<int, TModel> : null|TModel)
     * @static
     */
    public static function find($id, $columns = []){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->find($id, $columns); 
     } 
    /**
     * Find multiple models by their primary keys.
     *
     * @param array|\Hyperf\Database\Model\Arrayable $ids
     * @param array $columns
     * @return ModelCollection<int, TModel>
     * @static
     */
    public static function findMany($ids, $columns = []){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->findMany($ids, $columns); 
     } 
    /**
     * Find a model by its primary key or throw an exception.
     *
     * @param array $columns
     * @param mixed $id
     * @return ($id is array ? ModelCollection<int, TModel> : TModel)
     * @throws ModelNotFoundException
     * @static
     */
    public static function findOrFail($id, $columns = []){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->findOrFail($id, $columns); 
     } 
    /**
     * Find a model by its primary key or call a callback.
     *
     * @template TValue
     * @param (\Closure(): TValue)|list<string>|string $columns
     * @param null|(\Closure(): TValue) $callback
     * @return ($id is (array|Arrayable<array-key, mixed>) ? ModelCollection<int, TModel> : TModel|TValue)
     * @static
     */
    public static function findOr($id, $columns = [], $callback = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->findOr($id, $columns, $callback); 
     } 
    /**
     * Find a model by its primary key or return fresh model instance.
     *
     * @param array $columns
     * @param mixed $id
     * @return ($id is array ? ModelCollection<int, TModel> : TModel)
     * @static
     */
    public static function findOrNew($id, $columns = []){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->findOrNew($id, $columns); 
     } 
    /**
     * Get the first record matching the attributes or instantiate it.
     *
     * @return \Hyperf\Database\Model\TModel
     * @static
     */
    public static function firstOrNew($attributes, $values = []){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->firstOrNew($attributes, $values); 
     } 
    /**
     * Get the first record matching the attributes. If the record is not found, create it.
     *
     * @return \Hyperf\Database\Model\TModel
     * @static
     */
    public static function firstOrCreate($attributes, $values = []){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->firstOrCreate($attributes, $values); 
     } 
    /**
     * Attempt to create the record. If a unique constraint violation occurs, attempt to find the matching record.
     *
     * @return \Hyperf\Database\Model\TModel
     * @static
     */
    public static function createOrFirst($attributes = [], $values = []){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->createOrFirst($attributes, $values); 
     } 
    /**
     * Create or update a record matching the attributes, and fill it with values.
     *
     * @return \Hyperf\Database\Model\TModel
     * @static
     */
    public static function updateOrCreate($attributes, $values = []){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->updateOrCreate($attributes, $values); 
     } 
    /**
     * Create a record matching the attributes, or increment the existing record.
     *
     * @static
     */
    public static function incrementOrCreate($attributes, $column = 'count', $default = 1, $step = 1, $extra = []){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->incrementOrCreate($attributes, $column, $default, $step, $extra); 
     } 
    /**
     * Execute the query and get the first result or throw an exception.
     *
     * @param array $columns
     * @return \Hyperf\Database\Model\TModel
     * @throws ModelNotFoundException
     * @static
     */
    public static function firstOrFail($columns = []){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->firstOrFail($columns); 
     } 
    /**
     * Execute the query and get the first result or call a callback.
     *
     * @template TValue
     * @param array<string>|(\Closure(): TValue) $columns
     * @param null|(\Closure(): TValue) $callback
     * @return ($columns is (Closure(): TValue) ? TModel|TValue : ($callback is null ? null|TModel : TModel|TValue))
     * @static
     */
    public static function firstOr($columns = [], $callback = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->firstOr($columns, $callback); 
     } 
    /**
     * Get a single column's value from the first result of a query.
     *
     * @param string $column
     * @static
     */
    public static function value($column){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->value($column); 
     } 
    /**
     * Get a single column's value from the first result of the query or throw an exception.
     *
     * @throws ModelNotFoundException<Model>
     * @static
     */
    public static function valueOrFail($column){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->valueOrFail($column); 
     } 
    /**
     * Execute the query as a "select" statement.
     *
     * @param array $columns
     * @return ModelCollection<int, TModel>
     * @static
     */
    public static function get($columns = []){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->get($columns); 
     } 
    /**
     * Get the hydrated models without eager loading.
     *
     * @param array $columns
     * @return array<int, TModel>
     * @static
     */
    public static function getModels($columns = []){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->getModels($columns); 
     } 
    /**
     * Eager load the relationships for the models.
     *
     * @param array<int, TModel> $models
     * @return array<int, TModel>
     * @static
     */
    public static function eagerLoadRelations($models){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->eagerLoadRelations($models); 
     } 
    /**
     * Get a generator for the given query.
     *
     * @return Generator<int, TModel, TModel, void>
     * @static
     */
    public static function cursor(){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->cursor(); 
     } 
    /**
     * Chunk the results of a query by comparing numeric IDs.
     *
     * @param int $count
     * @param callable(ModelCollection<int, TModel>, int):  mixed $callback
     * @param null|string $column
     * @param null|string $alias
     * @return bool
     * @static
     */
    public static function chunkById($count, $callback, $column = null, $alias = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->chunkById($count, $callback, $column, $alias); 
     } 
    /**
     * Get an array with the values of a given column.
     *
     * @param string $column
     * @param null|string $key
     * @return Collection<array-key, mixed>
     * @static
     */
    public static function pluck($column, $key = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->pluck($column, $key); 
     } 
    /**
     * Paginate the given query.
     *
     * @throws InvalidArgumentException
     * @static
     */
    public static function paginate($perPage = null, $columns = [], $pageName = 'page', $page = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->paginate($perPage, $columns, $pageName, $page); 
     } 
    /**
     * Paginate the given query into a simple paginator.
     *
     * @param int $perPage
     * @param array $columns
     * @param string $pageName
     * @param null|int $page
     * @return \Hyperf\Database\Model\PaginatorInterface
     * @static
     */
    public static function simplePaginate($perPage = null, $columns = [], $pageName = 'page', $page = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->simplePaginate($perPage, $columns, $pageName, $page); 
     } 
    /**
     * Paginate the given query into a cursor paginator.
     *
     * @static
     */
    public static function cursorPaginate($perPage = null, $columns = [], $cursorName = 'cursor', $cursor = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->cursorPaginate($perPage, $columns, $cursorName, $cursor); 
     } 
    /**
     * Save a new model and return the instance.
     *
     * @return \Hyperf\Database\Model\TModel
     * @static
     */
    public static function create($attributes = []){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->create($attributes); 
     } 
    /**
     * Save a new model and return the instance. Allow mass-assignment.
     *
     * @return \Hyperf\Database\Model\TModel
     * @static
     */
    public static function forceCreate($attributes){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->forceCreate($attributes); 
     } 
    /**
     * Increment a column's value by a given amount.
     *
     * @param string $column
     * @param float|int $amount
     * @return int
     * @static
     */
    public static function increment($column, $amount = 1, $extra = []){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->increment($column, $amount, $extra); 
     } 
    /**
     * Decrement a column's value by a given amount.
     *
     * @param string $column
     * @param float|int $amount
     * @return int
     * @static
     */
    public static function decrement($column, $amount = 1, $extra = []){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->decrement($column, $amount, $extra); 
     } 
    /**
     * Register a replacement for the default delete function.
     *
     * @static
     */
    public static function onDelete($callback){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->onDelete($callback); 
     } 
    /**
     * Call the given local model scopes.
     *
     * @static
     */
    public static function scopes($scopes){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->scopes($scopes); 
     } 
    /**
     * Apply the scopes to the Model builder instance and return it.
     *
     * @return \Hyperf\Database\Model\Builder|static
     * @static
     */
    public static function applyScopes(){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->applyScopes(); 
     } 
    /**
     * Execute the query and get the first result if it's the sole matching record.
     *
     * @return \Hyperf\Database\Model\TModel
     * @throws ModelNotFoundException<TModel>
     * @throws MultipleRecordsFoundException
     * @static
     */
    public static function sole($columns = []){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->sole($columns); 
     } 
    /**
     * Prevent the specified relations from being eager loaded.
     *
     * @param mixed $relations
     * @return \Hyperf\Database\Model\Builder
     * @static
     */
    public static function without($relations){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->without($relations); 
     } 
    /**
     * Create a new instance of the model being queried.
     *
     * @param array $attributes
     * @return \Hyperf\Database\Model\TModel
     * @static
     */
    public static function newModelInstance($attributes = []){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->newModelInstance($attributes); 
     } 
    /**
     * Apply query-time casts to the model instance.
     *
     * @static
     */
    public static function withCasts($casts){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->withCasts($casts); 
     } 
    /**
     * Get the underlying query builder instance.
     *
     * @return \Hyperf\Database\Model\QueryBuilder
     * @static
     */
    public static function getQuery(){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->getQuery(); 
     } 
    /**
     * Set the underlying query builder instance.
     *
     * @param \Hyperf\Database\Model\QueryBuilder $query
     * @return \Hyperf\Database\Model\Builder
     * @static
     */
    public static function setQuery($query){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->setQuery($query); 
     } 
    /**
     * Get a base query builder instance.
     *
     * @return \Hyperf\Database\Model\QueryBuilder
     * @static
     */
    public static function toBase(){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->toBase(); 
     } 
    /**
     * Get the relationships being eagerly loaded.
     *
     * @return array
     * @static
     */
    public static function getEagerLoads(){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->getEagerLoads(); 
     } 
    /**
     * Set the relationships being eagerly loaded.
     *
     * @return \Hyperf\Database\Model\Builder
     * @static
     */
    public static function setEagerLoads($eagerLoad){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->setEagerLoads($eagerLoad); 
     } 
    /**
     * Get the model instance being queried.
     *
     * @return \Hyperf\Database\Model\TModel
     * @static
     */
    public static function getModel(){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->getModel(); 
     } 
    /**
     * Set a model instance for the model being queried.
     *
     * @template TNewModel of \Hyperf\Database\Model\Model
     * @param TNewModel $model
     * @return Builder<TNewModel>
     * @static
     */
    public static function setModel($model){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->setModel($model); 
     } 
    /**
     * Get the given macro by name.
     *
     * @param string $name
     * @return \Closure
     * @static
     */
    public static function getMacro($name){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->getMacro($name); 
     } 
    /**
     * Checks if a macro is registered.
     *
     * @param string $name
     * @return bool
     * @static
     */
    public static function hasMacro($name){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->hasMacro($name); 
     } 
    /**
     * Get the given global macro by name.
     *
     * @param string $name
     * @return \Closure
     * @static
     */
    public static function getGlobalMacro($name){ 
        return  \Hyperf\Database\Model\Builder::getGlobalMacro($name); 
     } 
    /**
     * Checks if a global macro is registered.
     *
     * @param string $name
     * @return bool
     * @static
     */
    public static function hasGlobalMacro($name){ 
        return  \Hyperf\Database\Model\Builder::hasGlobalMacro($name); 
     } 
    /**
     * Chunk the results of the query.
     *
     * @param int $count
     * @param callable(BaseCollection<int, TValue>, int):  mixed $callback
     * @return bool
     * @static
     */
    public static function chunk($count, $callback){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->chunk($count, $callback); 
     } 
    /**
     * Run a map over each item while chunking.
     *
     * @param callable(TValue):  mixed $callback
     * @static
     */
    public static function chunkMap($callback, $count = 1000){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->chunkMap($callback, $count); 
     } 
    /**
     * Execute a callback over each item while chunking.
     *
     * @param callable(TValue, int):  mixed $callback
     * @param int $count
     * @return bool
     * @static
     */
    public static function each($callback, $count = 1000){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->each($callback, $count); 
     } 
    /**
     * Query lazily, by chunks of the given size.
     *
     * @return LazyCollection<int, TValue>
     * @static
     */
    public static function lazy($chunkSize = 1000){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->lazy($chunkSize); 
     } 
    /**
     * Query lazily, by chunking the results of a query by comparing IDs.
     *
     * @return LazyCollection<int, TValue>
     * @static
     */
    public static function lazyById($chunkSize = 1000, $column = null, $alias = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->lazyById($chunkSize, $column, $alias); 
     } 
    /**
     * Query lazily, by chunking the results of a query by comparing IDs in descending order.
     *
     * @return LazyCollection<int, TValue>
     * @static
     */
    public static function lazyByIdDesc($chunkSize = 1000, $column = null, $alias = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->lazyByIdDesc($chunkSize, $column, $alias); 
     } 
    /**
     * Execute the query and get the first result.
     *
     * @param array $columns
     * @return null|\Hyperf\Database\Model\TValue
     * @static
     */
    public static function first($columns = []){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->first($columns); 
     } 
    /**
     * Execute a callback over each item while chunking by ID.
     *
     * @param callable(TValue, int):  mixed $callback
     * @static
     */
    public static function eachById($callback, $count = 1000, $column = null, $alias = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->eachById($callback, $count, $column, $alias); 
     } 
    /**
     * Chunk the results of a query by comparing IDs in a given order.
     *
     * @param callable(BaseCollection<int, TValue>, int):  mixed $callback
     * @static
     */
    public static function orderedChunkById($count, $callback, $column = null, $alias = null, $descending = false){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->orderedChunkById($count, $callback, $column, $alias, $descending); 
     } 
    /**
     * Chunk the results of a query by comparing IDs in descending order.
     *
     * @param callable(BaseCollection<int, TValue>, int):  mixed $callback
     * @static
     */
    public static function chunkByIdDesc($count, $callback, $column = null, $alias = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->chunkByIdDesc($count, $callback, $column, $alias); 
     } 
    /**
     * Pass the query to a given callback.
     *
     * @param \Closure $callback
     * @return $this|mixed
     * @static
     */
    public static function tap($callback){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->tap($callback); 
     } 
    /**
     * Execute the query and get the first result if it's the sole matching record.
     *
     * @return \Hyperf\Database\Model\TValue
     * @throws RecordsNotFoundException
     * @throws MultipleRecordsFoundException
     * @static
     */
    public static function baseSole($columns = []){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->baseSole($columns); 
     } 
    /**
     * Apply the callback if the given "value" is (or resolves to) truthy.
     *
     * @template TWhenParameter
     * @template TWhenReturnType
     * @param null|(\Closure($this): TWhenParameter)|TWhenParameter $value
     * @param null|(callable($this, TWhenParameter): TWhenReturnType) $callback
     * @param null|(callable($this, TWhenParameter): TWhenReturnType) $default
     * @param null|mixed $value
     * @return $this|TWhenReturnType
     * @static
     */
    public static function when($value = null, $callback = null, $default = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->when($value, $callback, $default); 
     } 
    /**
     * Apply the callback if the given "value" is (or resolves to) falsy.
     *
     * @template TUnlessParameter
     * @template TUnlessReturnType
     * @param null|(\Closure($this): TUnlessParameter)|TUnlessParameter $value
     * @param null|(callable($this, TUnlessParameter): TUnlessReturnType) $callback
     * @param null|(callable($this, TUnlessParameter): TUnlessReturnType) $default
     * @param null|mixed $value
     * @return $this|TUnlessReturnType
     * @static
     */
    public static function unless($value = null, $callback = null, $default = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->unless($value, $callback, $default); 
     } 
    /**
     * Add a relationship count / exists condition to the query.
     *
     * @template TRelatedModel of \Hyperf\Database\Model\Model
     * @param \Hyperf\Database\Model\Relations\Relation<TRelatedModel, *, *>|string $relation
     * @param string $operator
     * @param int $count
     * @param string $boolean
     * @param null|(\Closure(Builder<TRelatedModel>): void) $callback
     * @return static
     * @static
     */
    public static function has($relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->has($relation, $operator, $count, $boolean, $callback); 
     } 
    /**
     * Add a relationship count / exists condition to the query with an "or".
     *
     * @param \Hyperf\Database\Model\Relation|string $relation
     * @param string $operator
     * @param int $count
     * @return static
     * @static
     */
    public static function orHas($relation, $operator = '>=', $count = 1){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->orHas($relation, $operator, $count); 
     } 
    /**
     * Add a relationship count / exists condition to the query.
     *
     * @template TRelatedModel of \Hyperf\Database\Model\Model
     * @param \Hyperf\Database\Model\Relations\Relation<TRelatedModel, *, *>|string $relation
     * @param string $boolean
     * @param null|(\Closure(Builder<TRelatedModel>): void) $callback
     * @return static
     * @static
     */
    public static function doesntHave($relation, $boolean = 'and', $callback = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->doesntHave($relation, $boolean, $callback); 
     } 
    /**
     * Add a relationship count / exists condition to the query with an "or".
     *
     * @param \Hyperf\Database\Model\Relation|string $relation
     * @return static
     * @static
     */
    public static function orDoesntHave($relation){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->orDoesntHave($relation); 
     } 
    /**
     * Add a relationship count / exists condition to the query with where clauses.
     *
     * @template TRelatedModel of \Hyperf\Database\Model\Model
     * @param \Hyperf\Database\Model\Relations\Relation<TRelatedModel, *, *>|string $relation
     * @param null|(\Closure(Builder<TRelatedModel>): void) $callback
     * @param string $operator
     * @param int $count
     * @return static
     * @static
     */
    public static function whereHas($relation, $callback = null, $operator = '>=', $count = 1){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->whereHas($relation, $callback, $operator, $count); 
     } 
    /**
     * Add a relationship count / exists condition to the query with where clauses.
     * 
     * Also load the relationship with same condition.
     *
     * @param null|(\Closure(\Hyperf\Database\Model\Builder<*>|\Hyperf\Database\Model\Relations\Relation<*, *, *>): void) $callback
     * @return static
     * @static
     */
    public static function withWhereHas($relation, $callback = null, $operator = '>=', $count = 1){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->withWhereHas($relation, $callback, $operator, $count); 
     } 
    /**
     * Add a relationship count / exists condition to the query with where clauses and an "or".
     *
     * @template TRelatedModel of \Hyperf\Database\Model\Model
     * @param \Hyperf\Database\Model\Relations\Relation<TRelatedModel, *, *>|string $relation
     * @param null|(\Closure(Builder<TRelatedModel>): void) $callback
     * @param string $operator
     * @param int $count
     * @return static
     * @static
     */
    public static function orWhereHas($relation, $callback = null, $operator = '>=', $count = 1){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->orWhereHas($relation, $callback, $operator, $count); 
     } 
    /**
     * Add a relationship count / exists condition to the query with where clauses.
     *
     * @template TRelatedModel of \Hyperf\Database\Model\Model
     * @param \Hyperf\Database\Model\Relations\Relation<TRelatedModel, *, *>|string $relation
     * @param null|(\Closure(Builder<TRelatedModel>): void) $callback
     * @return static
     * @static
     */
    public static function whereDoesntHave($relation, $callback = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->whereDoesntHave($relation, $callback); 
     } 
    /**
     * Add a relationship count / exists condition to the query with where clauses and an "or".
     *
     * @template TRelatedModel of \Hyperf\Database\Model\Model
     * @param \Hyperf\Database\Model\Relations\Relation<TRelatedModel, *, *>|string $relation
     * @param null|(\Closure(Builder<TRelatedModel>): void) $callback
     * @return static
     * @static
     */
    public static function orWhereDoesntHave($relation, $callback = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->orWhereDoesntHave($relation, $callback); 
     } 
    /**
     * Add subselect queries to count the relations.
     *
     * @param mixed $relations
     * @return \Hyperf\Database\Model\Builder
     * @static
     */
    public static function withCount($relations){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->withCount($relations); 
     } 
    /**
     * Add subselect queries to include the max of the relation's column.
     *
     * @param array|string $relation
     * @return \Hyperf\Database\Model\Builder
     * @static
     */
    public static function withMax($relation, $column){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->withMax($relation, $column); 
     } 
    /**
     * Add subselect queries to include the min of the relation's column.
     *
     * @param array|string $relation
     * @return \Hyperf\Database\Model\Builder
     * @static
     */
    public static function withMin($relation, $column){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->withMin($relation, $column); 
     } 
    /**
     * Add subselect queries to include the sum of the relation's column.
     *
     * @param array|string $relation
     * @return \Hyperf\Database\Model\Builder
     * @static
     */
    public static function withSum($relation, $column){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->withSum($relation, $column); 
     } 
    /**
     * Add subselect queries to include the average of the relation's column.
     *
     * @param array|string $relation
     * @return \Hyperf\Database\Model\Builder
     * @static
     */
    public static function withAvg($relation, $column){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->withAvg($relation, $column); 
     } 
    /**
     * Add subselect queries to include an aggregate value for a relationship.
     *
     * @param mixed $relations
     * @param string $function
     * @static
     */
    public static function withAggregate($relations, $column, $function = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->withAggregate($relations, $column, $function); 
     } 
    /**
     * Merge the where constraints from another query to the current query.
     *
     * @return \Hyperf\Database\Model\Builder|static
     * @static
     */
    public static function mergeConstraintsFrom($from){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->mergeConstraintsFrom($from); 
     } 
    /**
     * Add a polymorphic relationship count / exists condition to the query with where clauses.
     *
     * @template TRelatedModel of \Hyperf\Database\Model\Model
     * @param MorphTo<TRelatedModel, *>|string $relation
     * @param array|string $types
     * @param null|(\Closure(Builder<TRelatedModel>, string): void) $callback
     * @param string $operator
     * @param int $count
     * @return static
     * @static
     */
    public static function whereHasMorph($relation, $types, $callback = null, $operator = '>=', $count = 1){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->whereHasMorph($relation, $types, $callback, $operator, $count); 
     } 
    /**
     * Add a polymorphic relationship count / exists condition to the query with where clauses and an "or".
     *
     * @template TRelatedModel of \Hyperf\Database\Model\Model
     * @param MorphTo<TRelatedModel, *>|string $relation
     * @param array|string $types
     * @param null|(\Closure(Builder<TRelatedModel>, string): void) $callback
     * @return static
     * @static
     */
    public static function orWhereHasMorph($relation, $types, $callback = null, $operator = '>=', $count = 1){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->orWhereHasMorph($relation, $types, $callback, $operator, $count); 
     } 
    /**
     * Add a polymorphic relationship count / exists condition to the query with where clauses.
     *
     * @template TRelatedModel of \Hyperf\Database\Model\Model
     * @param MorphTo<TRelatedModel, *>|string $relation
     * @param array|string $types
     * @param null|(\Closure(Builder<TRelatedModel>, string): void) $callback
     * @return static
     * @static
     */
    public static function whereDoesntHaveMorph($relation, $types, $callback = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->whereDoesntHaveMorph($relation, $types, $callback); 
     } 
    /**
     * Add a polymorphic relationship count / exists condition to the query with where clauses and an "or".
     *
     * @template TRelatedModel of \Hyperf\Database\Model\Model
     * @param MorphTo<TRelatedModel, *>|string $relation
     * @param array|string $types
     * @param null|(\Closure(Builder<TRelatedModel>, string): void) $callback
     * @return static
     * @static
     */
    public static function orWhereDoesntHaveMorph($relation, $types, $callback = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->orWhereDoesntHaveMorph($relation, $types, $callback); 
     } 
    /**
     * Add a basic where clause to a relationship query.
     *
     * @template TRelatedModel of \Hyperf\Database\Model\Model
     * @param Relation<TRelatedModel, *, *>|string $relation
     * @param array|(\Closure(Builder<TRelatedModel>): mixed)|\Hyperf\Database\Model\Expression|string $column
     * @return static
     * @static
     */
    public static function whereRelation($relation, $column, $operator = null, $value = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->whereRelation($relation, $column, $operator, $value); 
     } 
    /**
     * Add an "or where" clause to a relationship query.
     *
     * @param Relation<*, *, *>|string $relation
     * @return static
     * @static
     */
    public static function orWhereRelation($relation, $column, $operator = null, $value = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->orWhereRelation($relation, $column, $operator, $value); 
     } 
    /**
     * Add a polymorphic relationship condition to the query with a where clause.
     *
     * @param MorphTo<*, *>|string $relation
     * @return static
     * @static
     */
    public static function whereMorphRelation($relation, $types, $column, $operator = null, $value = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->whereMorphRelation($relation, $types, $column, $operator, $value); 
     } 
    /**
     * Add a polymorphic relationship condition to the query with an "or where" clause.
     *
     * @param MorphTo<*, *>|string $relation
     * @return static
     * @static
     */
    public static function orWhereMorphRelation($relation, $types, $column, $operator = null, $value = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->orWhereMorphRelation($relation, $types, $column, $operator, $value); 
     } 
    /**
     * Add a polymorphic relationship count / exists condition to the query.
     *
     * @template TRelatedModel of \Hyperf\Database\Model\Model
     * @param MorphTo<TRelatedModel, *>|string $relation
     * @param array|string $types
     * @param string $operator
     * @param int $count
     * @param string $boolean
     * @param null|(\Closure(Builder<TRelatedModel>, string): void) $callback
     * @return static
     * @static
     */
    public static function hasMorph($relation, $types, $operator = '>=', $count = 1, $boolean = 'and', $callback = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->hasMorph($relation, $types, $operator, $count, $boolean, $callback); 
     } 
    /**
     * Add a polymorphic relationship count / exists condition to the query with an "or".
     *
     * @param MorphTo<*, *>|string $relation
     * @return static
     * @static
     */
    public static function orHasMorph($relation, $types, $operator = '>=', $count = 1){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->orHasMorph($relation, $types, $operator, $count); 
     } 
    /**
     * Add a polymorphic relationship count / exists condition to the query.
     *
     * @template TRelatedModel of \Hyperf\Database\Model\Model
     * @param MorphTo<TRelatedModel, *>|string $relation
     * @param array|string $types
     * @param string $boolean
     * @param null|(\Closure(Builder<TRelatedModel>, string): void) $callback
     * @return static
     * @static
     */
    public static function doesntHaveMorph($relation, $types, $boolean = 'and', $callback = null){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->doesntHaveMorph($relation, $types, $boolean, $callback); 
     } 
    /**
     * Add a polymorphic relationship count / exists condition to the query with an "or".
     *
     * @param MorphTo<*, *>|string $relation
     * @return static
     * @static
     */
    public static function orDoesntHaveMorph($relation, $types){ 
        /** @var \Hyperf\Database\Model\Builder $instance */ 
        return  $instance->orDoesntHaveMorph($relation, $types); 
     } 
    /**
     * Set the columns to be selected.
     *
     * @param array|mixed $columns
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function select($columns = []){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->select($columns); 
     } 
    /**
     * Add a subselect expression to the query.
     *
     * @param \Hyperf\Database\Query\Builder|\Closure|\Hyperf\Database\Query\ModelBuilder|string $query
     * @param string $as
     * @return \Hyperf\Database\Query\Builder|static
     * @throws InvalidArgumentException
     * @static
     */
    public static function selectSub($query, $as){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->selectSub($query, $as); 
     } 
    /**
     * Add a new "raw" select expression to the query.
     *
     * @param string $expression
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function selectRaw($expression, $bindings = []){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->selectRaw($expression, $bindings); 
     } 
    /**
     * Makes "from" fetch from a subquery.
     *
     * @param \Hyperf\Database\Query\Builder|\Closure|\Hyperf\Database\Query\ModelBuilder|string $query
     * @param string $as
     * @return \Hyperf\Database\Query\Builder|static
     * @throws InvalidArgumentException
     * @static
     */
    public static function fromSub($query, $as){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->fromSub($query, $as); 
     } 
    /**
     * Add a raw from clause to the query.
     *
     * @param string $expression
     * @param mixed $bindings
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function fromRaw($expression, $bindings = []){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->fromRaw($expression, $bindings); 
     } 
    /**
     * Add a new select column to the query.
     *
     * @param array|mixed $column
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function addSelect($column){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->addSelect($column); 
     } 
    /**
     * Force the query to only return distinct results.
     *
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function distinct(){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->distinct(); 
     } 
    /**
     * Set the table which the query is targeting.
     *
     * @param string $table
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function from($table){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->from($table); 
     } 
    /**
     * Set the force indexes which the query should be used.
     *
     * @deprecated It will be removed in v3.1, please use `forceIndex` instead
     * @static
     */
    public static function forceIndexes($forceIndexes){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->forceIndexes($forceIndexes); 
     } 
    /**
     * Add an index hint to suggest a query index.
     *
     * @static
     */
    public static function useIndex($index){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->useIndex($index); 
     } 
    /**
     * Add an index hint to force a query index.
     *
     * @static
     */
    public static function forceIndex($index){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->forceIndex($index); 
     } 
    /**
     * Add an index hint to ignore a query index.
     *
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function ignoreIndex($index){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->ignoreIndex($index); 
     } 
    /**
     * Add a join clause to the query.
     *
     * @param string $table
     * @param \Closure|string $first
     * @param null|string $operator
     * @param null|string $second
     * @param string $type
     * @param bool $where
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function join($table, $first, $operator = null, $second = null, $type = 'inner', $where = false){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->join($table, $first, $operator, $second, $type, $where); 
     } 
    /**
     * Add a "join where" clause to the query.
     *
     * @param string $table
     * @param \Closure|string $first
     * @param string $operator
     * @param string $second
     * @param string $type
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function joinWhere($table, $first, $operator, $second, $type = 'inner'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->joinWhere($table, $first, $operator, $second, $type); 
     } 
    /**
     * Add a subquery join clause to the query.
     *
     * @param \Hyperf\Database\Query\Builder|\Closure|\Hyperf\Database\Query\ModelBuilder|string $query
     * @param string $as
     * @param \Closure|string $first
     * @param null|string $operator
     * @param null|string $second
     * @param string $type
     * @param bool $where
     * @return \Hyperf\Database\Query\Builder|static
     * @throws InvalidArgumentException
     * @static
     */
    public static function joinSub($query, $as, $first, $operator = null, $second = null, $type = 'inner', $where = false){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->joinSub($query, $as, $first, $operator, $second, $type, $where); 
     } 
    /**
     * Add a lateral join clause to the query.
     *
     * @static
     */
    public static function joinLateral($query, $as, $type = 'inner'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->joinLateral($query, $as, $type); 
     } 
    /**
     * Add a lateral left join to the query.
     *
     * @static
     */
    public static function leftJoinLateral($query, $as){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->leftJoinLateral($query, $as); 
     } 
    /**
     * Add a left join to the query.
     *
     * @param string $table
     * @param \Closure|string $first
     * @param null|string $operator
     * @param null|string $second
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function leftJoin($table, $first, $operator = null, $second = null){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->leftJoin($table, $first, $operator, $second); 
     } 
    /**
     * Add a "join where" clause to the query.
     *
     * @param string $table
     * @param \Closure|string $first
     * @param string $operator
     * @param string $second
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function leftJoinWhere($table, $first, $operator, $second){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->leftJoinWhere($table, $first, $operator, $second); 
     } 
    /**
     * Add a subquery left join to the query.
     *
     * @param \Hyperf\Database\Query\Builder|\Closure|\Hyperf\Database\Query\ModelBuilder|string $query
     * @param string $as
     * @param \Closure|string $first
     * @param null|string $operator
     * @param null|string $second
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function leftJoinSub($query, $as, $first, $operator = null, $second = null){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->leftJoinSub($query, $as, $first, $operator, $second); 
     } 
    /**
     * Add a right join to the query.
     *
     * @param string $table
     * @param \Closure|string $first
     * @param null|string $operator
     * @param null|string $second
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function rightJoin($table, $first, $operator = null, $second = null){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->rightJoin($table, $first, $operator, $second); 
     } 
    /**
     * Add a "right join where" clause to the query.
     *
     * @param string $table
     * @param \Closure|string $first
     * @param string $operator
     * @param string $second
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function rightJoinWhere($table, $first, $operator, $second){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->rightJoinWhere($table, $first, $operator, $second); 
     } 
    /**
     * Add a subquery right join to the query.
     *
     * @param \Hyperf\Database\Query\Builder|\Closure|\Hyperf\Database\Query\ModelBuilder|string $query
     * @param string $as
     * @param \Closure|string $first
     * @param null|string $operator
     * @param null|string $second
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function rightJoinSub($query, $as, $first, $operator = null, $second = null){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->rightJoinSub($query, $as, $first, $operator, $second); 
     } 
    /**
     * Add a "cross join" clause to the query.
     *
     * @param string $table
     * @param null|\Closure|string $first
     * @param null|string $operator
     * @param null|string $second
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function crossJoin($table, $first = null, $operator = null, $second = null){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->crossJoin($table, $first, $operator, $second); 
     } 
    /**
     * Merge an array of where clauses and bindings.
     *
     * @param array $wheres
     * @param array $bindings
     * @static
     */
    public static function mergeWheres($wheres, $bindings){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->mergeWheres($wheres, $bindings); 
     } 
    /**
     * Prepare the value and operator for a where clause.
     *
     * @param string $value
     * @param string $operator
     * @param bool $useDefault
     * @return array
     * @throws InvalidArgumentException
     * @static
     */
    public static function prepareValueAndOperator($value, $operator, $useDefault = false){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->prepareValueAndOperator($value, $operator, $useDefault); 
     } 
    /**
     * Add a "where" clause comparing two columns to the query.
     *
     * @param array|string $first
     * @param null|string $operator
     * @param null|string $second
     * @param null|string $boolean
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function whereColumn($first, $operator = null, $second = null, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereColumn($first, $operator, $second, $boolean); 
     } 
    /**
     * Add an "or where" clause comparing two columns to the query.
     *
     * @param array|string $first
     * @param null|string $operator
     * @param null|string $second
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function orWhereColumn($first, $operator = null, $second = null){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereColumn($first, $operator, $second); 
     } 
    /**
     * Add a raw where clause to the query.
     *
     * @param string $sql
     * @param string $boolean
     * @param mixed $bindings
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function whereRaw($sql, $bindings = [], $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereRaw($sql, $bindings, $boolean); 
     } 
    /**
     * Add a raw or where clause to the query.
     *
     * @param string $sql
     * @param mixed $bindings
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function orWhereRaw($sql, $bindings = []){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereRaw($sql, $bindings); 
     } 
    /**
     * Add a "where in" clause to the query.
     *
     * @param string $column
     * @param string $boolean
     * @param bool $not
     * @param mixed $values
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function whereIn($column, $values, $boolean = 'and', $not = false){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereIn($column, $values, $boolean, $not); 
     } 
    /**
     * Add an "or where in" clause to the query.
     *
     * @param string $column
     * @param mixed $values
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function orWhereIn($column, $values){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereIn($column, $values); 
     } 
    /**
     * Add a "where not in" clause to the query.
     *
     * @param string $column
     * @param string $boolean
     * @param mixed $values
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function whereNotIn($column, $values, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereNotIn($column, $values, $boolean); 
     } 
    /**
     * Add an "or where not in" clause to the query.
     *
     * @param string $column
     * @param mixed $values
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function orWhereNotIn($column, $values){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereNotIn($column, $values); 
     } 
    /**
     * Add a "where in raw" clause for integer values to the query.
     *
     * @param string $column
     * @param array|\Hyperf\Database\Query\Arrayable $values
     * @param string $boolean
     * @param bool $not
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function whereIntegerInRaw($column, $values, $boolean = 'and', $not = false){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereIntegerInRaw($column, $values, $boolean, $not); 
     } 
    /**
     * Add a "where not in raw" clause for integer values to the query.
     *
     * @param string $column
     * @param array|\Hyperf\Database\Query\Arrayable $values
     * @param string $boolean
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function whereIntegerNotInRaw($column, $values, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereIntegerNotInRaw($column, $values, $boolean); 
     } 
    /**
     * Add a "where null" clause to the query.
     *
     * @param array|string $columns
     * @param string $boolean
     * @param bool $not
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function whereNull($columns, $boolean = 'and', $not = false){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereNull($columns, $boolean, $not); 
     } 
    /**
     * Add an "or where null" clause to the query.
     *
     * @param string $column
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function orWhereNull($column){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereNull($column); 
     } 
    /**
     * Add a "where not null" clause to the query.
     *
     * @param string $column
     * @param string $boolean
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function whereNotNull($column, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereNotNull($column, $boolean); 
     } 
    /**
     * Add a where between statement to the query.
     *
     * @param string $column
     * @param string $boolean
     * @param bool $not
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function whereBetween($column, $values, $boolean = 'and', $not = false){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereBetween($column, $values, $boolean, $not); 
     } 
    /**
     * Add an or where between statement to the query.
     *
     * @param string $column
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function orWhereBetween($column, $values){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereBetween($column, $values); 
     } 
    /**
     * Add a where not between statement to the query.
     *
     * @param string $column
     * @param string $boolean
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function whereNotBetween($column, $values, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereNotBetween($column, $values, $boolean); 
     } 
    /**
     * Add an or where not between statement to the query.
     *
     * @param string $column
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function orWhereNotBetween($column, $values){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereNotBetween($column, $values); 
     } 
    /**
     * Add an "or where not null" clause to the query.
     *
     * @param string $column
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function orWhereNotNull($column){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereNotNull($column); 
     } 
    /**
     * Add a "where date" statement to the query.
     *
     * @param string $column
     * @param string $operator
     * @param \Hyperf\Database\Query\DateTimeInterface|string $value
     * @param string $boolean
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function whereDate($column, $operator, $value = null, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereDate($column, $operator, $value, $boolean); 
     } 
    /**
     * Add an "or where date" statement to the query.
     *
     * @param string $column
     * @param string $operator
     * @param \Hyperf\Database\Query\DateTimeInterface|string $value
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function orWhereDate($column, $operator, $value = null){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereDate($column, $operator, $value); 
     } 
    /**
     * Add a "where time" statement to the query.
     *
     * @param string $column
     * @param string $operator
     * @param \Hyperf\Database\Query\DateTimeInterface|string $value
     * @param string $boolean
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function whereTime($column, $operator, $value = null, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereTime($column, $operator, $value, $boolean); 
     } 
    /**
     * Add an "or where time" statement to the query.
     *
     * @param string $column
     * @param string $operator
     * @param \Hyperf\Database\Query\DateTimeInterface|string $value
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function orWhereTime($column, $operator, $value = null){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereTime($column, $operator, $value); 
     } 
    /**
     * Add a "where day" statement to the query.
     *
     * @param string $column
     * @param string $operator
     * @param \Hyperf\Database\Query\DateTimeInterface|string $value
     * @param string $boolean
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function whereDay($column, $operator, $value = null, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereDay($column, $operator, $value, $boolean); 
     } 
    /**
     * Add an "or where day" statement to the query.
     *
     * @param string $column
     * @param string $operator
     * @param \Hyperf\Database\Query\DateTimeInterface|string $value
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function orWhereDay($column, $operator, $value = null){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereDay($column, $operator, $value); 
     } 
    /**
     * Add a "where month" statement to the query.
     *
     * @param string $column
     * @param string $operator
     * @param \Hyperf\Database\Query\DateTimeInterface|string $value
     * @param string $boolean
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function whereMonth($column, $operator, $value = null, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereMonth($column, $operator, $value, $boolean); 
     } 
    /**
     * Add an "or where month" statement to the query.
     *
     * @param string $column
     * @param string $operator
     * @param \Hyperf\Database\Query\DateTimeInterface|string $value
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function orWhereMonth($column, $operator, $value = null){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereMonth($column, $operator, $value); 
     } 
    /**
     * Add a "where year" statement to the query.
     *
     * @param string $column
     * @param string $operator
     * @param \Hyperf\Database\Query\DateTimeInterface|int|string $value
     * @param string $boolean
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function whereYear($column, $operator, $value = null, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereYear($column, $operator, $value, $boolean); 
     } 
    /**
     * Add an "or where year" statement to the query.
     *
     * @param string $column
     * @param string $operator
     * @param \Hyperf\Database\Query\DateTimeInterface|int|string $value
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function orWhereYear($column, $operator, $value = null){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereYear($column, $operator, $value); 
     } 
    /**
     * Add a nested where statement to the query.
     *
     * @param string $boolean
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function whereNested($callback, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereNested($callback, $boolean); 
     } 
    /**
     * Create a new query instance for nested where condition.
     *
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function forNestedWhere(){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->forNestedWhere(); 
     } 
    /**
     * Add another query builder as a nested where to the query builder.
     *
     * @param \Hyperf\Database\Query\Builder|static $query
     * @param string $boolean
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function addNestedWhereQuery($query, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->addNestedWhereQuery($query, $boolean); 
     } 
    /**
     * Add an exists clause to the query.
     *
     * @param string $boolean
     * @param bool $not
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function whereExists($callback, $boolean = 'and', $not = false){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereExists($callback, $boolean, $not); 
     } 
    /**
     * Add an or exists clause to the query.
     *
     * @param bool $not
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function orWhereExists($callback, $not = false){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereExists($callback, $not); 
     } 
    /**
     * Add a where not exists clause to the query.
     *
     * @param string $boolean
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function whereNotExists($callback, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereNotExists($callback, $boolean); 
     } 
    /**
     * Add a where not exists clause to the query.
     *
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function orWhereNotExists($callback){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereNotExists($callback); 
     } 
    /**
     * Add an exists clause to the query.
     *
     * @param string $boolean
     * @param bool $not
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function addWhereExistsQuery($query, $boolean = 'and', $not = false){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->addWhereExistsQuery($query, $boolean, $not); 
     } 
    /**
     * Adds a where condition using row values.
     *
     * @param array $columns
     * @param string $operator
     * @param array $values
     * @param string $boolean
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function whereRowValues($columns, $operator, $values, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereRowValues($columns, $operator, $values, $boolean); 
     } 
    /**
     * Adds a or where condition using row values.
     *
     * @param array $columns
     * @param string $operator
     * @param array $values
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function orWhereRowValues($columns, $operator, $values){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereRowValues($columns, $operator, $values); 
     } 
    /**
     * Add a "where JSON contains" clause to the query.
     *
     * @param string $column
     * @param string $boolean
     * @param bool $not
     * @param mixed $value
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function whereJsonContains($column, $value, $boolean = 'and', $not = false){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereJsonContains($column, $value, $boolean, $not); 
     } 
    /**
     * Add a "or where JSON contains" clause to the query.
     *
     * @param string $column
     * @param mixed $value
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function orWhereJsonContains($column, $value){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereJsonContains($column, $value); 
     } 
    /**
     * Add a "where JSON not contains" clause to the query.
     *
     * @param string $column
     * @param string $boolean
     * @param mixed $value
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function whereJsonDoesntContain($column, $value, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereJsonDoesntContain($column, $value, $boolean); 
     } 
    /**
     * Add a "or where JSON not contains" clause to the query.
     *
     * @param string $column
     * @param mixed $value
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function orWhereJsonDoesntContain($column, $value){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereJsonDoesntContain($column, $value); 
     } 
    /**
     * Add a where between columns statement using a value to the query.
     *
     * @param array{Expression|string, Expression|string} $columns
     * @static
     */
    public static function whereValueBetween($value, $columns, $boolean = 'and', $not = false){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereValueBetween($value, $columns, $boolean, $not); 
     } 
    /**
     * Add an or where between columns statement using a value to the query.
     *
     * @param array{Expression|string, Expression|string} $columns
     * @static
     */
    public static function orWhereValueBetween($value, $columns){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereValueBetween($value, $columns); 
     } 
    /**
     * Add a where not between columns statement using a value to the query.
     *
     * @param array{Expression|string, Expression|string} $columns
     * @static
     */
    public static function whereValueNotBetween($value, $columns, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereValueNotBetween($value, $columns, $boolean); 
     } 
    /**
     * Add an or where not between columns statement using a value to the query.
     *
     * @param array{Expression|string, Expression|string} $columns
     * @static
     */
    public static function orWhereValueNotBetween($value, $columns){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereValueNotBetween($value, $columns); 
     } 
    /**
     * Add a "where JSON overlaps" clause to the query.
     *
     * @static
     */
    public static function whereJsonOverlaps($column, $value, $boolean = 'and', $not = false){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereJsonOverlaps($column, $value, $boolean, $not); 
     } 
    /**
     * Add an "or where JSON overlaps" clause to the query.
     *
     * @static
     */
    public static function orWhereJsonOverlaps($column, $value){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereJsonOverlaps($column, $value); 
     } 
    /**
     * Add a "where JSON not overlap" clause to the query.
     *
     * @static
     */
    public static function whereJsonDoesntOverlap($column, $value, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereJsonDoesntOverlap($column, $value, $boolean); 
     } 
    /**
     * Add an "or where JSON not overlap" clause to the query.
     *
     * @static
     */
    public static function orWhereJsonDoesntOverlap($column, $value){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereJsonDoesntOverlap($column, $value); 
     } 
    /**
     * Add an "where Bit Functions and Operators" clause to the query.
     *
     * @static
     */
    public static function whereBit($key, $operator = 'and', $value = null, $boolean = 'and', $not = false){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereBit($key, $operator, $value, $boolean, $not); 
     } 
    /**
     * Add an "where Bit Not Functions and Operators" clause to the query.
     *
     * @static
     */
    public static function whereBitNot($key, $operator = 'and', $value = null, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereBitNot($key, $operator, $value, $boolean); 
     } 
    /**
     * Add an "or where Bit Functions and Operators" clause to the query.
     *
     * @static
     */
    public static function orWhereBit($key, $operator = 'and', $value = null, $not = false){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereBit($key, $operator, $value, $not); 
     } 
    /**
     * Add an "or where Bit Not Functions and Operators" clause to the query.
     *
     * @static
     */
    public static function orWhereBitNot($key, $operator = 'and', $value = null){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereBitNot($key, $operator, $value); 
     } 
    /**
     * Add an "where Bit Or Functions and Operators" clause to the query.
     *
     * @static
     */
    public static function whereBitOr($key, $value = null, $not = false){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereBitOr($key, $value, $not); 
     } 
    /**
     * Add an "where Bit Or Not Functions and Operators" clause to the query.
     *
     * @static
     */
    public static function whereBitOrNot($key, $value = null){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereBitOrNot($key, $value); 
     } 
    /**
     * Add an "or where Bit Or Functions and Operators" clause to the query.
     *
     * @static
     */
    public static function orWhereBitOr($key, $value = null, $not = false){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereBitOr($key, $value, $not); 
     } 
    /**
     * Add an "or where Bit Or Functions and Operators" clause to the query.
     *
     * @static
     */
    public static function orWhereBitOrNot($key, $value = null){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereBitOrNot($key, $value); 
     } 
    /**
     * Add an "where Bit Xor Functions and Operators" clause to the query.
     *
     * @static
     */
    public static function whereBitXor($key, $value = null, $not = false){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereBitXor($key, $value, $not); 
     } 
    /**
     * Add an "where Bit Xor Not Functions and Operators" clause to the query.
     *
     * @static
     */
    public static function whereBitXorNot($key, $value = null){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereBitXorNot($key, $value); 
     } 
    /**
     * Add an "or where Bit Xor Functions and Operators" clause to the query.
     *
     * @static
     */
    public static function orWhereBitXor($key, $value = null, $not = false){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereBitXor($key, $value, $not); 
     } 
    /**
     * Add an "or where Bit Xor Not Functions and Operators" clause to the query.
     *
     * @static
     */
    public static function orWhereBitXorNot($key, $value = null){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereBitXorNot($key, $value); 
     } 
    /**
     * Add a "where JSON length" clause to the query.
     *
     * @param string $column
     * @param string $boolean
     * @param null|mixed $value
     * @param mixed $operator
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function whereJsonLength($column, $operator, $value = null, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereJsonLength($column, $operator, $value, $boolean); 
     } 
    /**
     * Add a "or where JSON length" clause to the query.
     *
     * @param string $column
     * @param null|mixed $value
     * @param mixed $operator
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function orWhereJsonLength($column, $operator, $value = null){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereJsonLength($column, $operator, $value); 
     } 
    /**
     * Handles dynamic "where" clauses to the query.
     *
     * @param string $method
     * @param array $parameters
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function dynamicWhere($method, $parameters){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->dynamicWhere($method, $parameters); 
     } 
    /**
     * Add a "where fulltext" clause to the query.
     *
     * @param string|string[] $columns
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function whereFullText($columns, $value, $options = [], $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereFullText($columns, $value, $options, $boolean); 
     } 
    /**
     * Add a "or where fulltext" clause to the query.
     *
     * @param string|string[] $columns
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function orWhereFullText($columns, $value, $options = []){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereFullText($columns, $value, $options); 
     } 
    /**
     * Add a "where" clause to the query for multiple columns with "and" conditions between them.
     *
     * @param string[] $columns
     * @static
     */
    public static function whereAll($columns, $operator = null, $value = null, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereAll($columns, $operator, $value, $boolean); 
     } 
    /**
     * Add an "or where" clause to the query for multiple columns with "and" conditions between them.
     *
     * @param string[] $columns
     * @static
     */
    public static function orWhereAll($columns, $operator = null, $value = null){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereAll($columns, $operator, $value); 
     } 
    /**
     * Add an "where" clause to the query for multiple columns with "or" conditions between them.
     *
     * @param string[] $columns
     * @static
     */
    public static function whereAny($columns, $operator = null, $value = null, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereAny($columns, $operator, $value, $boolean); 
     } 
    /**
     * Add an "or where" clause to the query for multiple columns with "or" conditions between them.
     *
     * @param string[] $columns
     * @static
     */
    public static function orWhereAny($columns, $operator = null, $value = null){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereAny($columns, $operator, $value); 
     } 
    /**
     * Add a "where not" clause to the query for multiple columns where none of the conditions should be true.
     *
     * @param \Hyperf\Database\Query\Expression[]|string[] $columns
     * @static
     */
    public static function whereNone($columns, $operator = null, $value = null, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->whereNone($columns, $operator, $value, $boolean); 
     } 
    /**
     * Add an "or where not" clause to the query for multiple columns where none of the conditions should be true.
     *
     * @param \Hyperf\Database\Query\Expression[]|string[] $columns
     * @static
     */
    public static function orWhereNone($columns, $operator = null, $value = null){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orWhereNone($columns, $operator, $value); 
     } 
    /**
     * Add a "group by" clause to the query.
     *
     * @param array|\Hyperf\Database\Query\Expression|string $groups
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function groupBy(...$groups){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->groupBy(...$groups); 
     } 
    /**
     * Add a "having" clause to the query.
     *
     * @param string $column
     * @param null|string $operator
     * @param null|string $value
     * @param string $boolean
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function having($column, $operator = null, $value = null, $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->having($column, $operator, $value, $boolean); 
     } 
    /**
     * Add a "or having" clause to the query.
     *
     * @param string $column
     * @param null|string $operator
     * @param null|string $value
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function orHaving($column, $operator = null, $value = null){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orHaving($column, $operator, $value); 
     } 
    /**
     * Add a "having between " clause to the query.
     *
     * @param string $column
     * @param string $boolean
     * @param bool $not
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function havingBetween($column, $values, $boolean = 'and', $not = false){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->havingBetween($column, $values, $boolean, $not); 
     } 
    /**
     * Add a raw having clause to the query.
     *
     * @param string $sql
     * @param string $boolean
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function havingRaw($sql, $bindings = [], $boolean = 'and'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->havingRaw($sql, $bindings, $boolean); 
     } 
    /**
     * Add a raw or having clause to the query.
     *
     * @param string $sql
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function orHavingRaw($sql, $bindings = []){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orHavingRaw($sql, $bindings); 
     } 
    /**
     * Add an "order by" clause to the query.
     *
     * @param \Closure|\Hyperf\Database\Query\Expression|\Hyperf\Database\Query\ModelBuilder|static|string $column
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function orderBy($column, $direction = 'asc'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orderBy($column, $direction); 
     } 
    /**
     * Add a descending "order by" clause to the query.
     *
     * @param \Closure|\Hyperf\Database\Query\Expression|\Hyperf\Database\Query\ModelBuilder|static|string $column
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function orderByDesc($column){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orderByDesc($column); 
     } 
    /**
     * Put the query's results in random order.
     *
     * @param string $seed
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function inRandomOrder($seed = ''){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->inRandomOrder($seed); 
     } 
    /**
     * Add a raw "order by" clause to the query.
     *
     * @param string $sql
     * @param array $bindings
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function orderByRaw($sql, $bindings = []){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->orderByRaw($sql, $bindings); 
     } 
    /**
     * Alias to set the "offset" value of the query.
     *
     * @param int $value
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function skip($value){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->skip($value); 
     } 
    /**
     * Set the "offset" value of the query.
     *
     * @param int $value
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function offset($value){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->offset($value); 
     } 
    /**
     * Alias to set the "limit" value of the query.
     *
     * @param int $value
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function take($value){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->take($value); 
     } 
    /**
     * Set the "limit" value of the query.
     *
     * @param int $value
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function limit($value){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->limit($value); 
     } 
    /**
     * Set the limit and offset for a given page.
     *
     * @param int $page
     * @param int $perPage
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function forPage($page, $perPage = 15){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->forPage($page, $perPage); 
     } 
    /**
     * Constrain the query to the previous "page" of results before a given ID.
     *
     * @param int $perPage
     * @param null|int $lastId
     * @param string $column
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function forPageBeforeId($perPage = 15, $lastId = 0, $column = 'id'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->forPageBeforeId($perPage, $lastId, $column); 
     } 
    /**
     * Constrain the query to the next "page" of results after a given ID.
     *
     * @param int $perPage
     * @param null|int $lastId
     * @param string $column
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function forPageAfterId($perPage = 15, $lastId = 0, $column = 'id'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->forPageAfterId($perPage, $lastId, $column); 
     } 
    /**
     * Remove all existing orders and optionally add a new order.
     *
     * @param \Closure|\Hyperf\Database\Query\Expression|\Hyperf\Database\Query\ModelBuilder|static|string $column
     * @static
     */
    public static function reorder($column = null, $direction = 'asc'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->reorder($column, $direction); 
     } 
    /**
     * Add a union statement to the query.
     *
     * @param \Hyperf\Database\Query\Builder|\Closure|\Hyperf\Database\Query\ModelBuilder $query
     * @param bool $all
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function union($query, $all = false){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->union($query, $all); 
     } 
    /**
     * Add a union all statement to the query.
     *
     * @param \Hyperf\Database\Query\Builder|\Closure|\Hyperf\Database\Query\ModelBuilder $query
     * @return \Hyperf\Database\Query\Builder|static
     * @static
     */
    public static function unionAll($query){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->unionAll($query); 
     } 
    /**
     * Lock the selected rows in the table.
     *
     * @param bool|string $value
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function lock($value = true){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->lock($value); 
     } 
    /**
     * Lock the selected rows in the table for updating.
     *
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function lockForUpdate(){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->lockForUpdate(); 
     } 
    /**
     * Share lock the selected rows in the table.
     *
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function sharedLock(){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->sharedLock(); 
     } 
    /**
     * Get the SQL representation of the query.
     *
     * @return string
     * @static
     */
    public static function toSql(){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->toSql(); 
     } 
    /**
     * Get the raw SQL representation of the query with embedded bindings.
     *
     * @return string
     * @static
     */
    public static function toRawSql(){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->toRawSql(); 
     } 
    /**
     * Get the count of the total records for the paginator.
     *
     * @param array $columns
     * @return int
     * @static
     */
    public static function getCountForPagination($columns = []){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->getCountForPagination($columns); 
     } 
    /**
     * Concatenate values of a given column as a string.
     *
     * @param string $column
     * @param string $glue
     * @return string
     * @static
     */
    public static function implode($column, $glue = ''){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->implode($column, $glue); 
     } 
    /**
     * Determine if any rows exist for the current query.
     *
     * @return bool
     * @static
     */
    public static function exists(){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->exists(); 
     } 
    /**
     * Determine if no rows exist for the current query.
     *
     * @return bool
     * @static
     */
    public static function doesntExist(){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->doesntExist(); 
     } 
    /**
     * Execute the given callback if no rows exist for the current query.
     *
     * @static
     */
    public static function existsOr($callback){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->existsOr($callback); 
     } 
    /**
     * Execute the given callback if rows exist for the current query.
     *
     * @static
     */
    public static function doesntExistOr($callback){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->doesntExistOr($callback); 
     } 
    /**
     * Retrieve the "count" result of the query.
     *
     * @param string $columns
     * @return int
     * @static
     */
    public static function count($columns = '*'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->count($columns); 
     } 
    /**
     * Retrieve the minimum value of a given column.
     *
     * @param string $column
     * @static
     */
    public static function min($column){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->min($column); 
     } 
    /**
     * Retrieve the maximum value of a given column.
     *
     * @param string $column
     * @static
     */
    public static function max($column){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->max($column); 
     } 
    /**
     * Retrieve the sum of the values of a given column.
     *
     * @param string $column
     * @static
     */
    public static function sum($column){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->sum($column); 
     } 
    /**
     * Retrieve the average of the values of a given column.
     *
     * @param string $column
     * @static
     */
    public static function avg($column){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->avg($column); 
     } 
    /**
     * Alias for the "avg" method.
     *
     * @param string $column
     * @static
     */
    public static function average($column){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->average($column); 
     } 
    /**
     * Execute an aggregate function on the database.
     *
     * @param string $function
     * @param array $columns
     * @static
     */
    public static function aggregate($function, $columns = []){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->aggregate($function, $columns); 
     } 
    /**
     * Execute a numeric aggregate function on the database.
     *
     * @param string $function
     * @param array $columns
     * @return float|int
     * @static
     */
    public static function numericAggregate($function, $columns = []){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->numericAggregate($function, $columns); 
     } 
    /**
     * Insert a new record into the database.
     *
     * @return bool
     * @static
     */
    public static function insert($values){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->insert($values); 
     } 
    /**
     * Insert a new record and get the value of the primary key.
     *
     * @param null|string $sequence
     * @return int
     * @static
     */
    public static function insertGetId($values, $sequence = null){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->insertGetId($values, $sequence); 
     } 
    /**
     * Insert new records into the table using a subquery.
     *
     * @param \Hyperf\Database\Query\Builder|\Closure|\Hyperf\Database\Query\ModelBuilder|string $query
     * @return bool
     * @static
     */
    public static function insertUsing($columns, $query){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->insertUsing($columns, $query); 
     } 
    /**
     * Insert new records into the table using a subquery while ignoring errors.
     *
     * @static
     */
    public static function insertOrIgnoreUsing($columns, $query){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->insertOrIgnoreUsing($columns, $query); 
     } 
    /**
     * Insert ignore a new record into the database.
     *
     * @static
     */
    public static function insertOrIgnore($values){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->insertOrIgnore($values); 
     } 
    /**
     * Insert or update a record matching the attributes, and fill it with values.
     *
     * @return bool
     * @static
     */
    public static function updateOrInsert($attributes, $values = []){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->updateOrInsert($attributes, $values); 
     } 
    /**
     * Insert new records or update the existing ones.
     *
     * @param array|string $uniqueBy
     * @param null|array $update
     * @return int
     * @static
     */
    public static function upsert($values, $uniqueBy, $update = null){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->upsert($values, $uniqueBy, $update); 
     } 
    /**
     * Increment the given column's values by the given amounts.
     *
     * @static
     */
    public static function incrementEach($columns, $extra = []){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->incrementEach($columns, $extra); 
     } 
    /**
     * Decrement the given column's values by the given amounts.
     *
     * @static
     */
    public static function decrementEach($columns, $extra = []){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->decrementEach($columns, $extra); 
     } 
    /**
     * Run a truncate statement on the table.
     *
     * @static
     */
    public static function truncate(){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->truncate(); 
     } 
    /**
     * Get all of the query builder's columns in a text-only array with all expressions evaluated.
     *
     * @static
     */
    public static function getColumns(){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->getColumns(); 
     } 
    /**
     * Create a raw database expression.
     *
     * @param mixed $value
     * @return \Hyperf\Database\Query\Expression
     * @static
     */
    public static function raw($value){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->raw($value); 
     } 
    /**
     * Get the current query value bindings in a flattened array.
     *
     * @return array
     * @static
     */
    public static function getBindings(){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->getBindings(); 
     } 
    /**
     * Get the raw array of bindings.
     *
     * @return array
     * @static
     */
    public static function getRawBindings(){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->getRawBindings(); 
     } 
    /**
     * Set the bindings on the query builder.
     *
     * @param string $type
     * @return \Hyperf\Database\Query\Builder
     * @throws InvalidArgumentException
     * @static
     */
    public static function setBindings($bindings, $type = 'where'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->setBindings($bindings, $type); 
     } 
    /**
     * Add a binding to the query.
     *
     * @param string $type
     * @param mixed $value
     * @return \Hyperf\Database\Query\Builder
     * @throws InvalidArgumentException
     * @static
     */
    public static function addBinding($value, $type = 'where'){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->addBinding($value, $type); 
     } 
    /**
     * Cast the given binding value.
     *
     * @static
     */
    public static function castBinding($value){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->castBinding($value); 
     } 
    /**
     * Cast the given binding value.
     *
     * @static
     */
    public static function castBindings($values){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->castBindings($values); 
     } 
    /**
     * Merge an array of bindings into our bindings.
     *
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function mergeBindings($query){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->mergeBindings($query); 
     } 
    /**
     * Get the database query processor instance.
     *
     * @return \Hyperf\Database\Query\Processor
     * @static
     */
    public static function getProcessor(){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->getProcessor(); 
     } 
    /**
     * Get the query grammar instance.
     *
     * @return \Hyperf\Database\Query\Grammar
     * @static
     */
    public static function getGrammar(){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->getGrammar(); 
     } 
    /**
     * Use the write pdo for query.
     *
     * @return \Hyperf\Database\Query\Builder
     * @static
     */
    public static function useWritePdo(){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->useWritePdo(); 
     } 
    /**
     * Clone the query without the given properties.
     *
     * @return static
     * @static
     */
    public static function cloneWithout($properties){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->cloneWithout($properties); 
     } 
    /**
     * Clone the query without the given bindings.
     *
     * @return static
     * @static
     */
    public static function cloneWithoutBindings($except){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->cloneWithoutBindings($except); 
     } 
    /**
     * Explains the query.
     *
     * @static
     */
    public static function explain(){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->explain(); 
     } 
    /**
     * Dynamically handle calls to the class.
     *
     * @param string $method
     * @param array $parameters
     * @return mixed
     * @throws BadMethodCallException
     * @static
     */
    public static function macroCall($method, $parameters){ 
        /** @var \Hyperf\Database\Query\Builder $instance */ 
        return  $instance->macroCall($method, $parameters); 
     } 
    /**
     * Register a custom macro.
     *
     * @param string $name
     * @param callable|object $macro
     * @param-closure-this static $macro
     * @static
     */
    public static function macro($name, $macro){ 
        return  \Hyperf\Database\Query\Builder::macro($name, $macro); 
     } 
    /**
     * Mix another object into the class.
     *
     * @param object $mixin
     * @param bool $replace
     * @throws ReflectionException
     * @static
     */
    public static function mixin($mixin, $replace = true){ 
        return  \Hyperf\Database\Query\Builder::mixin($mixin, $replace); 
     } 
  } 
}namespace App\Model{
/**
 * App\Models\Example
 *
 * @property integer $id Уникальный идентификатор ...
 * @property string $name Имя ...
 * @property \Carbon\Carbon $created_at Временная метка создания записи
 * @property \Carbon\Carbon|null $updated_at Временная метка изменения записи
 * @property string|null $deleted_at Временная метка удаления записи
 * @method static bool|null forceDelete()
 * @method static \Hyperf\Database\Model\Builder|\App\Model\Example newModelQuery()
 * @method static \Hyperf\Database\Model\Builder|\App\Model\Example newQuery()
 * @method static \Hyperf\Database\Model\Builder|\App\Model\Example onlyTrashed()
 * @method static \Hyperf\Database\Model\Builder|\App\Model\Example query()
 * @method static bool|null restore()
 * @method static \Hyperf\Database\Model\Builder|\App\Model\Example whereCreatedAt($value)
 * @method static \Hyperf\Database\Model\Builder|\App\Model\Example whereDeletedAt($value)
 * @method static \Hyperf\Database\Model\Builder|\App\Model\Example whereId($value)
 * @method static \Hyperf\Database\Model\Builder|\App\Model\Example whereName($value)
 * @method static \Hyperf\Database\Model\Builder|\App\Model\Example whereUpdatedAt($value)
 * @method static \Hyperf\Database\Model\Builder|\App\Model\Example withTrashed()
 * @method static \Hyperf\Database\Model\Builder|\App\Model\Example withoutTrashed()
 */
	final class Example extends \Eloquent {}
}

