{extends file='admin/admin.tpl'}
{block name=title}{t}Dashboard{/t}{/block}
{block name=content}
    {if isset($user) and $user->getRole() != null and $user->getRole()->getPriority() >= 200}
        <div class="row">
            <div class="col-md-6 col-lg-2 col-xlg-2">
                <div class="card">
                    <div class="box bg-danger text-center">
                        <h1 class="font-light text-white">{$availableLaptops|number_format:0:".":","}</h1>
                        <h6 class="text-white text-uppercase font-bold mb-0">{t}available Laptops{/t}</h6>
                        <span class="text-white font-light text-uppercase fs12">&nbsp;</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2 col-xlg-2">
                <div class="card">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white">{$bookTotal|number_format:0:".":","}</h1>
                        <h6 class="text-white text-uppercase font-bold mb-0">{t}Total Books{/t}</h6>
                        <span class="text-white font-light text-uppercase fs12">&nbsp;</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2 col-xlg-2">
                <div class="card">
                    <div class="box bg-primary text-center">
                        <h1 class="font-light text-white">{$issueCount|number_format:0:".":","}</h1>
                        <h6 class="text-white text-uppercase font-bold mb-0">{t}Issued Books{/t}</h6>
                        <span class="text-white font-light text-uppercase fs12">({t}last month{/t})</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2 col-xlg-2">
                <div class="card">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white">{$returnCount|number_format:0:".":","}</h1>
                        <h6 class="text-white text-uppercase font-bold mb-0">{t}Returned Books{/t}</h6>
                        <span class="text-white font-light text-uppercase fs12">({t}last month{/t})</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2 col-xlg-2">
                <div class="card">
                    <div class="box bg-warning text-center">
                        <h1 class="font-light text-white">{$lostCount|number_format:0:".":","}</h1>
                        <h6 class="text-white text-uppercase font-bold mb-0">{t}Lost Books{/t}</h6>
                        <span class="text-white font-light text-uppercase fs12">({t}last month{/t})</span>
                    </div>
                </div>
            </div>
        </div>
    {/if}
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
{/block}