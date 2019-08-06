<?php declare(strict_types = 1);

// Licensed to Elasticsearch B.V under one or more agreements.
// Elasticsearch B.V licenses this file to you under the Apache 2.0 License.
// See the LICENSE file in the project root for more information

namespace Elasticsearch\Examples\Docs\Analysis\Tokenizers;

use Elasticsearch\Examples\Docs\Testers\SimpleExamplesTester;

/**
 *
 * Class: LetterTokenizer
 *
 * Date: 2019-08-05 08:49:19
 *
 * @source   analysis/tokenizers/letter-tokenizer.asciidoc
 * @category Elasticsearch\Examples\Docs
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 *
 */
class LetterTokenizer extends SimpleExamplesTester {

    /**
     * Tag:  76448aaaaa2c352bb6e09d2f83a3fbb3
     * Line: 13
     * Date: 2019-08-05 08:49:19
     */
    public function testExampleL13_76448aaaaa2c352bb6e09d2f83a3fbb3()
    {
        $client = $this->getClient();
        // tag::76448aaaaa2c352bb6e09d2f83a3fbb3[]
        // TODO -- Implement Example
        // POST _analyze
        // {
        //   "tokenizer": "letter",
        //   "text": "The 2 QUICK Brown-Foxes jumped over the lazy dog's bone."
        // }
        // end::76448aaaaa2c352bb6e09d2f83a3fbb3[]

        $curl = 'POST _analyze'
              . '{'
              . '  "tokenizer": "letter",'
              . '  "text": "The 2 QUICK Brown-Foxes jumped over the lazy dog's bone."'
              . '}';

        // TODO -- make assertion
    }

// %__METHOD__%


}