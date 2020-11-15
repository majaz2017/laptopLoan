{extends file='admin/admin.tpl'}
{block name=content}
    {if isset($lastIssuedBooks) and $lastIssuedBooks != null}
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h4 class="card-title ml-3 mt-3">{t}Last Issued Books{/t}</h4>
                    <table class="table table-striped table-hover table-responsive">
                        <thead>
                            <tr>
                                <th   class="text-right">{t}Book{/t}</th>
                                <th   class="text-right">{t}Publisher{/t}</th>
                                <th style="width: 140px;" class="text-right">{t}Publishing Year{/t}</th>
                                <th style="width: 150px;" class="text-right">{t}ISBN{/t}</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$lastIssuedBooks item=book name=book}
                                <tr>
                                    <td>
                                        <a href="{$routes->getRouteString("bookView",["bookId"=>$book->getId()])}">{$book->getTitle()}</a>
                                    </td>
                                    <td>
                                        {if $book->getPublisher() != null}
                                            {$book->getPublisher()->getName()}
                                        {/if}
                                    </td>
                                    <td>{if $book->getPublishingYear() != null}{$book->getPublishingYear()}{/if}</td>
                                    <td>
                                        {if $book->getISBN13()}
                                            {$book->getISBN13()}
                                        {else}
                                            {$book->getISBN10()}
                                        {/if}
                                    </td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    {/if}
    {if isset($lastRequestedBooks) and $lastRequestedBooks != null}
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h4 class="card-title ml-3 mt-3">{t}Last Requested Books{/t}</h4>
                    <table class="table table-striped table-hover table-responsive">
                        <thead>
                            <tr>
                                <th class="text-right">{t}Book{/t}</th>
                                <th class="text-right">{t}Publisher{/t}</th>
                                <th style="width: 140px;" class="text-right" >{t}Publishing Year{/t}</th>
                                <th style="width: 150px;" class="text-right">{t}ISBN{/t}</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$lastRequestedBooks item=book name=book}
                                <tr>
                                    <td>
                                        <a href="{$routes->getRouteString("bookView",["bookId"=>$book->getId()])}">{$book->getTitle()}</a>
                                    </td>
                                    <td>
                                        {if $book->getPublisher() != null}
                                            {$book->getPublisher()->getName()}
                                        {/if}
                                    </td>
                                    <td>
                                        {if $book->getISBN13()}
                                            {$book->getISBN13()}
                                        {else}
                                            {$book->getISBN10()}
                                        {/if}
                                    </td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    {/if}
{/block}